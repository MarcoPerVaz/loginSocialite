
<!-- Title -->
<h1 align="center">Proyecto - LoginSocialite</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Relacionar todos los modelos de la App con Eloquent y Seeds</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>Edición del modelo <code>app/User</code></li>
  <li>
    Creación y edición del modelo <code>UserSocialAccount</code>
    <pre>php artisan make:model UserSocialAccount</pre>
  </li>
  <em>*Relaciones con Eloquent</em>
  <li>
    Edición del archivo <code>seeds/DatabaseSeeder</code>
    <br>
    <em>*Se crea el factory para los usuarios</em>
  </li>
  <li>
    Implementación de las migraciones borrando y generandolas de nuevo con información predefinida
    <pre>php artisan migrate:fresh --seed</pre>
  </li>
</ol>
</li>
<!-- End Commit instructions -->

  <!-- Proyecto Login con Socialite -->
  <h3>Proyecto Login con Socialite</h3>
  <ol>
    <li>
      Edición del archivo config/services.php
      <br>
      <em>*Se registran las configuraciones de Socialite de las 2 API's</em>
    </li>
    <li>
      Edición del archivo .env
      <br>
      <em>*Se agregan las configuraciones para Socialite dependiendo las llaves de la API</em>
      <br>
      <code>GITHUB_CLIENT_ID=</code>
      <br>
      <code>GITHUB_CLIENT_SECRET=</code>
      <br>
      <br>
      <code>FACEBOOK_CLIENT_ID=</code>
      <br>
      <code>FACEBOOK_CLIENT_SECRET=</code>
    </li>
  </ol>
<!-- End Commit instructions -->
<!-- Notes -->
<h3>Notas:</h3>
<ul>
  
</ul>

<em>*La URL del proyecto debe ser corta y con dominio .it, ya que las API's muestran error</em>
<!-- End notes -->
