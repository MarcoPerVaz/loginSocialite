
  <!-- Title -->
  <h1 align="center">Proyecto - Login con Socialite</h1>
  <!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Migraciones - users, user_social_account</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
  <ol>
    <li>
      Edición de la migración <code>create_users_table</code>
      <br>
      <em>*Los campos de la tabla <code>user_social_accounts</code> bien se pueden crear en una migración por separado</em>
    </li>
    <li>
      Creación de la Base de Datos loginSocialite desde la consola de laragon
      <pre>mysql -u root</pre>
      <pre>create database cursosOnline_laravel56_Udemy</pre>
    </li>
    <li>
      Edición del archivo .env
      <br>
      <code>DB_DATABASE=loginSocialite</code>
      <br>
      <code>DB_USERNAME=root</code>
      <br>
      <code>DB_PASSWORD=</code>
    </li>
    <li>
      Implementar las migraciones
      <pre>php artisan migrate</pre>
      Implementar las migraciones borrando todo y volviendolo a crear
      <pre>php artisan migrate:fresh</pre>
    </li>
  </ol>
<!-- End Commit instructions -->
<!-- Notes -->
<h3>Notas:</h3>
<ul>

</ul>

<em></em>
<!-- End notes -->
