SECURITY (.htaccess & .htpasswd):
*note@u:blank,p:none
*note@edit:/etc/apache2/sites-enabled/000-default.conf, add inside <VirtualHost> tag:
<Directory "/var/www/html/">
  AuthType Basic
  AuthName "Restricted Content"
  AuthUserFile /var/www/html/.htpass
  Require valid-user
</Directory>
