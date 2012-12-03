<h2>Installation<h2>

<h3>Download and initial setup</h3>

<p>Download Kohana from here: <a
href=
"http://kohanaframework.org/download">http://kohanaframework.org/download</a></p>

<p>Extract the files, which will give you a root 'kohana'
directory which contains all the framework and application files.</p>

<p>Rename the 'kohana' directory to your project
name.</p>

<hr />

<h3>Move the document root</h3>

<p>From a security viewpoint, It's a good idea to move the 'document root' directory
away from the system files.</p>

<ol>
  <li>Create a 'httpdocs' directory in the root of your
  application.</li>
  <li>Move the following files into the 'httpdocs'
  directory:
    <ul>
      <li>example.htaccess</li>
      <li>index.php</li>
      <li>install.php</li>
    </ul>
  </li>
  <li>Rename 'httpdocs/example.htaccess' file to 'httpdocs/.htaccess'</li>
  <li>
    Open up 'httpdocs/index.php', and change the <code>$application</code>, <code>$modules</code> and
    <code>$system</code> variable to match the following:
    <ol>
      <li><code>$application = '../application';</code></li>
      <li><code>$modules = '../modules';</code></li>
      <li><code>$system = '../system';</code></li>
    </ol>
  </li>
</ol>

<p>Your root directory should now contain the following files and
directories:</p>
<pre>
├── application
├── httpdocs
├── modules
├── system
├── vendor
├── composer.json
├── composer.lock
├── composer.phar
├── LICENSE.md
└── README.md</pre>

<hr />

<h3>Application config</h3>

<p>Set the timezone, in file: <code>application/boostrap.php</code>:</p>

<pre class="prettyprint">date_default_timezone_set('timezone');</pre>

<p>Change the base url and index file, in file: <code>application/boostrap.php</code>:</p>

<pre class="prettyprint language-php">Kohana::init(array(
  'base_url'   => '/',
  'index_file' => '',
));</pre>

<hr />

<h3>Web server setup</h3>

<p>Change your webserver config files to point to your application. I
normally create an 'apache' directory in the root of the application, and
create my Apache VirtualHost config file in there.</p>

<p>Here is what my default Apache virtualhost file looks
like:</p>

<p>(In file: <code>apache/project-name.conf</code>)</p>
<pre class="prettyprint">
&lt;VirtualHost *:80&gt;

DocumentRoot /home/richard/Projects/kohana-examples/httpdocs
ServerName  kohana-examples

# Set the environment
SetEnv KOHANA_ENV development

&lt;/VirtualHost&gt;</pre>

<p>As you can see above, I've set the Kohana application
environment to be 'development'. It's important to explicitly set
this environment variable as you'll use iit to perform different tasks depending
on your application environment.</p>

<p>Now point Apache to your virtualhost file. I normally just symlink
to the file from within Apache's 'sites-enabled'
directory:</p>

<pre class="prettyprint">cd /etc/apache2/sites-enabled
sudo ln -s /home/username/project/vhost.conf
sudo apache2ctl configtest
sudo apache2ctl restart
</pre>

<p>Remember to update your /etc/hosts file to point to the application
hostname. I would have added the following host entry to my /etc/hosts file:</p>

<pre class="prettyprint">127.0.0.1   kohana-examples</pre>

<p>Now open up <a href=
"http://kohana-examples">http://kohana-examples</a>&nbsp;in your browser
and you should see the Kohana tests page displayed:</p>

<p>
  <img src="/img/tutorials/kohana-tests-fail.png" alt="Kohana tests fail" />
</p>

<hr />

<h3>Fixing install tests</h3>

<p>As you can see from the screenshot, there's usually a couple
of changes we need to change to get the tests to pass. The most common change is to set
the correct permissions on the 'application/cache' and
'application/logs' directories:</p>

<p>You can do this in one go with the following command:</p>

<pre class="prettyprint">sudo chmod -R 777 application/cache/ application/logs/</pre>

<p>Fix any other broken tests before continuing.</p>

<p>
  <img src="/img/tutorials/kohana-tests-pass.png" alt="Kohana tests pass" />
</p>

<hr />

<h3>Installation complete</h3>

<p>Once all tests pass, you can delete the
'httpdocs/install.php' file, refresh the page and
you should be greeted with a 'hello, world!' message.</p>

<p>At this point, you are ready to start building your application.
You have reached the point of doing the minimum to get Kohana running.</p>


<div class="alert alert-info">
  <strong>More info:</strong> 
  <a href="http://kohanaframework.org/3.3/guide/kohana/install">http://kohanaframework.org/3.3/guide/kohana/install</a>
</div>


<hr />
<p>
  <a href="/tutorials/database" class="btn pull-right">
    Next: Database setup &raquo;
  </a>
</p>