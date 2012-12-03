<h2>View Classes</h2>

<p>View Classes (or ViewModel Classes) give you a layer in which you
can access data required by your page layout. It helps with greatly reducing the logic
that you'll typically find in a controller (but shouldn't be handled in a
controller).</p>

<p>Kohana 3.3 does not come with any View Class system, but I highly
recommend using KOstache, which is an unofficial module that allows you to use View
classes using Mustache templates.</p>

<hr />

<h3>Setting up KOstache</h3>

<p>Because the KOstache module includes vendor specific files (the
mustache php library), you will have to add the KOstache module as a git
submodule:</p>

  <pre>
git submodule add git://github.com/zombor/KOstache.git modules/kostache
cd modules/kostache/
git submodule update --init</pre>

<p>Once all the files have finishing checking out, enable the
directory in the 'application/bootstrap.php' file:</p>

<p>'kostache' &nbsp;=&gt; MODPATH.'kostache',</p>

<p>Create the following director: 'application/templates'.
(You'll store all your mustache templates in this directory.)</p>

<p>Create the following directory:
'application/classes/View'. (You'll store all view classes in this
directory.)</p>

<hr />

<h3>KOstache layouts</h3>

<p>You'll first need to create a base Layout.php controller,
which will render the KOstache layout:</p>

<p>In file
<code>application/classes/Controller/Layout.php</code>:</p>

<pre class="prettyprint languague-php">&lt;?php defined('SYSPATH') or die('No direct script access.');

class Controller_Layout extends Controller 
{
  protected $content = NULL;

  public function after()
  {
    $this-&gt;response-&gt;body(
      Kostache_Layout::factory()-&gt;render($this->content)
    );
  }
} // End Layout</pre>

<p>Extend your Home controller from the Layout controller, and set the
content property to be an instance of the Home Page view class.</p>

<p>In file
<code>application/classes/Controller/Home.php</code>:</p>

<pre class="prettyprint languague-php">&lt;?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Layout
{
  public function action_index()
  {
    $this-&gt;content = new View_Page_Home;
  }
} // End Home</pre>

<p>Now create the base layout View class:</p>

<p>In file:
<code>application/classes/View/Layout.php</code></p>

<pre class="prettyprint languague-php">&lt;?php defined('SYSPATH') or die('No direct script access.');

class View_Layout 
{
  public $title = 'Kohana examples';
}</pre>

<p>Create the Home Page view class.</p>

<p>In file:
<code>application/classes/View/Page/Home.php</code></p>

<pre class="prettyprint languague-php">&lt;?php defined('SYSPATH') or die('No direct script access.');

class View_Page_Home extends View_Layout
{
  public $project_name = 'Kohana examples!';
}</pre>


<p>Create the layout template:</p>

<p>In file:
<code>application/templates/layout.mustache</code>:</p>

<pre class="prettyprint languague-html">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
  &lt;meta charset="utf-8" /&gt;
  &lt;title&gt;&#123;&#123;title&#125;&#125;&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
  &#123;&#123;&gt;content&#125;&#125;
&lt;/body&gt;
&lt;/html&gt;</pre>

<p>Create the Home Page template:</p>

<p>In file:
<code>application/templates/Page/Home.mustache</code>:</p>

<pre class="prettyprint languague-html">&lt;p&gt;Home page for {{project_name}}!&lt;/p&gt;</pre>

<p>Now load your application in your browser and check everything is
working.</p>

<p>At this point I'd want to create some basic template
partials. Create the following files:</p>

<ul>
  <li>application/templates/partials/head.mustache</li>
  <li>application/templates/partials/footer.mustache</li>
</ul>

<p>Update your layout file to include the new partials:</p>

<p>In file:
<code>application/templates/layout.mustache</code>:</p>

<pre class="prettyprint languague-html">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
  &#123;&#123;&gt;head&#125;&#125;
&lt;/head&gt;
&lt;body&gt;
  &#123;&#123;&gt;content&#125;&#125;
  &#123;&#123;&gt;footer&#125;&#125;
&lt;/body&gt;
&lt;/html&gt;</pre>


<div class="alert alert-info">
  <strong>More info:</strong> 
  <a href="https://github.com/zombor/KOstache">https://github.com/zombor/KOstache</a>
</div>

<hr />
<p>
  <a href="/tutorials/controller" class="btn pull-left">
    &laquo; Previous: Controller setup
  </a>
  <a href="/tutorials/assets" class="btn pull-right">
    Next: Assets &raquo;
  </a>
</p>