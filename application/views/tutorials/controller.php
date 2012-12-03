<h2>Controller setup</h2>

<p>The default Kohana install will include a 'Welcome'
controller that is used to display the welcome 'hello, world!' message. The
first thing I usually do is rename that controller to 'Home' and adjust the
routing to point to the Home controller.</p>

<p>Rename 'application/classes/Controller/Welcome.php' to
'application/classes/Controller/Home.php'</p>

<p>Open up 'application/classes/Controller/Home.php' and
change 'Controller_Welcome' to 'Controller_Home':</p>
<pre class="prettyprint languague-php">&lt;?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller
{
  public function action_index()
  {
    $this-&gt;response-&gt;body('hello, world!');
  }
} // End Home</pre>

<p>Open up 'application/bootstrap.php' and scroll to end
of the file where you'll find the Routes section. Change the default route to
point to the Home controller:</p>

<pre class="prettyprint languague-php">Route::set('default', '(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))')
->defaults(array(
  'controller' => 'Home',
  'action'     => 'index',
));</pre>

<p>Refresh your browser to ensure everything still works. At this
point you should still be seeing the 'hello, world!' message.</p>

<div class="alert alert-info">
  <strong>More info:</strong> 
  <a href="http://kohanaframework.org/3.3/guide/kohana/mvc/controllers">http://kohanaframework.org/3.3/guide/kohana/mvc/controllers</a>
</div>



<hr />
<p>
  <a href="/tutorials/minion" class="btn pull-left">
    &laquo; Previous: Minion setup
  </a>
  <a href="/tutorials/kostache" class="btn pull-right">
    Next: View classes (KOstache) &raquo;
  </a>
</p>