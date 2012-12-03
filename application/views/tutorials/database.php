<h2>Database setup</h2>

<p>Before you can start interacting with the database from your
application, you need to enable the 'database' module:</p>

<ol>
  <li>Open up the 'application/bootstrap.php' file</li>
  <li>Find the
  'Enabled modules' section, and uncomment the 'database' and
  'orm' modules to enable them.</li>
  <li>Copy the 'modules/database/config/database.php'
  file to 'application/config/database.php'.</li>
  <li>Open up 'application/config/database.php' and change
  the 'hostname', 'database', 'username' and
  'password' values.</li>
</ol>

<p>Once that's done, everything is ready for you to start using
your database from Kohana.</p>

<div class="alert alert-info">
  <strong>More info:</strong> 
  <a href="http://kohanaframework.org/3.3/guide/database">http://kohanaframework.org/3.3/guide/Database</a>
</div>

  
<hr />
<p>
  <a href="/tutorials/installation" class="btn pull-left">
    &laquo; Previous: Installation
  </a>
  <a href="/tutorials/minion" class="btn pull-right">
    Next: Minion setup &raquo;
  </a>
</p>