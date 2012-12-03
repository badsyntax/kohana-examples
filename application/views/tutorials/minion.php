<h2>Minion setup</h2>

<p>Minion can be used for any sort of task, but most importantly it
can help you with database migrations.</p>

<p>Kohana 3.3 comes packaged with the Minion module, so to begin you
need to enable it:</p>

<p>Open up 'application/bootstrap.php' file, &nbsp;find the
'Enabled modules' section, and uncomment the 'database' and
'minion' modules to enable them.</p>

<p>Now move the 'modules/minion/minion' script file to
location 'httpdocs/minion'. (This file is the minion CLI task
runner.)</p>

<p>Open up 'httpdocs/minion' and adjust the include path so it matches
the following:</p>
<pre class="prettyprint">
#!/usr/bin/env php
&lt;?php

include __DIR__.DIRECTORY_SEPARATOR.'index.php';</pre>


<p>You'll need to make the minion file executable before you can
use it:</p>

<pre>sudo chmod +x httpdocs/minion</pre>

<p>Test that minion is running correctly by executing it, and you
should see the following:</p>

<p>
  <img src="/img/tutorials/kohana-minion.png" alt="Kohana minion" class="img-polaroid" />
</p>

<p>Now we need to install the minion migrations task to allow us to do
database migrations.</p>

<div class="alert alert-info">
  <strong>More info:</strong> <a href="https://github.com/kohana/minion">https://github.com/kohana/minion</a>
</div>

<hr />

<h3>Minion migrations setup</h3>

<p>Download the minion migrations task module from here:
<a href=
"https://github.com/kohana-minion/tasks-migrations/downloads">https://github.com/kohana-minion/tasks-migrations/downloads</a></p>

<p>(The default download will download the 3.3 develop branch at the
time of writing.)</p>

<ol>
  <li>Extract the downloaded file and rename the directory to
  'tasks-migrations'.</li>
  <li>Move the 'task-migrations' directory into the
  'modules' directory of your application.</li>
  <li>Enable the module in the
  'application/bootstrap.php' file, eg:
    <ol>
      <li>'tasks-migrations' &nbsp;=&gt; MODPATH.'tasks-migrations',
      &nbsp;// Minion tasks migrations</li>
    </ol>
  </li>
</ol>

<p>Now run the migrations to setup the migrations table in your
database:</p>

<pre>./minion migrations:run</pre>

<p>
  <img src="/img/tutorials/kohana-minion-migrations.png" alt="Kohana minion database migrations" class="img-polaroid" />
</p>

<p>(Although there are no migrations to run, executing that command
for the first time will setup the db tables required for minion.)</p>

<div class="alert alert-info">
  <strong>More info:</strong> <a href="https://github.com/kohana-minion/tasks-migrations">https://github.com/kohana-minion/tasks-migrations</a>
</div>

<hr />
<p>
  <a href="/tutorials/database" class="btn pull-left">
    &laquo; Previous: Database setup
  </a>
  <a href="/tutorials/controller" class="btn pull-right">
    Next: Controller setup &raquo;
  </a>
</p>