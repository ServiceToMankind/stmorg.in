<?php
print_r($_POST);
#RewriteCond %{HTTP:X-Forwarded-Proto} =http
#RewriteRule (.*) https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

#RewriteCond %{SERVER_PORT} 80
#RewriteRule ^(.*)$ https://www.stmorg.in/$1 [R,L]

#RewriteCond %{HTTP_HOST} ^stmorg.in$
#RewriteCond (.*) https://%(HTTP_HOST)%{REQUEST_URI} [L,R=301]

#RewriteCond %{HTTP_HOST} ^www.stmorg.in$ [NC]
#RewriteCond (.*) https://stmorg.in/$1 [R=301,L]

// RewriteRule ^share share.php [NC,L]
// RewriteRule ^home index.php [NC,L]
// RewriteRule ^contact contact.php [NC,L]
// RewriteRule ^donate donate.php [NC,L]
// RewriteRule ^login login.php [NC,L]