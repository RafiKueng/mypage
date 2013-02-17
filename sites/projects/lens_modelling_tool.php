<h3>Lens Modelling Tool (working title)</h3>
<ul class="post_info">
  <li class="date">by RafiK, from Sept. 2012 until Mar. 2013 (est)</li>
  <li class="github"><a href="https://github.com/RafiKueng/LensTools">github/LensTools</a></li>
  <li class="projecthome"><a href="#">Project Page</a></li>
</ul>         
<p>
  A web based front end tool that allows you to model gravitational lenses in a simple way. It uses Jonathan Coles Glass for the actual simulation in the backend.
</p>
<h4>Features:</h4>
<ul>
  <li>java script based User Interface (using jquery & jquery UI)</li>
  <li>python / django based database backend</li>
  <li>celery based task / worker distribution for the simulation task</li>
  <li>scalable: can run locally as a User Interface for glass or on one or several webservers</li>
  <li>several parts: static webserver, dynamic webserver, task broker, workers (can all run on different machines)</li>
</ul>
