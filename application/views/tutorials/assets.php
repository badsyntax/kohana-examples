 <h3>Assets</h3>

  <p>Once you have view classes, it becomes a lot easier to manage your
  view assets. Start by creating an assets config file.</p>

  <p>In file: <code>application/config/assets.php</code>:</p>

<pre class="prettyprint languague-php">&lt;?php defined('SYSPATH') or die('No direct script access.');

return array(
  'css' => array(
    'css/bootstrap.min.css',
    'css/styles.css',
  ),
  'js' => array(
    'js/jquery-1.8.3.min.js',
    'js/bootstrap.min.js',
    'js/app.js',
  ),
);</pre>
  <p>Then you can output those assets from your view classes, for
  examples:</p>

  <p>In file:
  <code>application/classes/View/Fragments/Head.php</code>:</p>

<pre class="prettyprint languague-php">&lt;?php defined('SYSPATH') or die('No direct script access.');

class View_Fragments_Head
{
  public function styles()
  {
    $styles = Kohana::$config->load('assets.css');

    return implode("\n", array_map('HTML::style', $styles));
  }
}</pre>


  <p>And then show the assets in the view.</p>

  <p>In file:
  <code>applications/templates/Fragments/Head.mustache</code>:</p>

<pre class="prettyprint languague-html">&lt;meta charset="utf-8" /&gt;
&lt;title&gt;&#123;&#123;title&#125;&#125;&lt;/title&gt;
&lt;link rel="shortcut icon" href="/favicon.ico"&gt;
&#123;&#123;&#123;styles&#125;&#125;&#125;</pre>

<hr />
<p>
  <a href="/tutorials/kostache" class="btn">
    &laquo; Previous: View classes (KOstache)
  </a>
</p>