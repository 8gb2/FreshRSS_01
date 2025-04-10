<?php

/******************************************************************************/
/* Each entry of that file can be associated with a comment to indicate its   */
/* state. When there is no comment, it means the entry is fully translated.   */
/* The recognized comments are (comment matching is case-insensitive):        */
/*   + TODO: the entry has never been translated.                             */
/*   + DIRTY: the entry has been translated but needs to be updated.          */
/*   + IGNORE: the entry does not need to be translated.                      */
/* When a comment is not recognized, it is discarded.                         */
/******************************************************************************/

return array(
	'auth' => array(
		'allow_anonymous' => 'Öntanımlı kullanıcının makalelerinin anonim okunmasına izin ver (%s)',
		'allow_anonymous_refresh' => 'Anonim makale yenilemesine izin ver',
		'api_enabled' => '<abbr>API</abbr> erişimine izin ver <small>(mobil uygulamalar için gerekli and sharing user queries)</small>',	// DIRTY
		'form' => 'Web formu (geleneksel, JavaScript gerektirir)',
		'http' => 'HTTP (advanced: managed by Web server, OIDC, SSO…)',	// TODO
		'none' => 'Hiçbiri (tehlikeli)',
		'title' => 'Kimlik doğrulama',
		'token' => 'Ana kimlik doğrulama jetonu',
		'token_help' => 'Kullanıcının tüm RSS çıkışlarına erişimine ve kimlik doğrulaması olmadan akışları yenilemesine izin ver:',
		'type' => 'Kimlik doğrulama yöntemi',
		'unsafe_autologin' => 'Güvensiz otomatik girişe izin ver: ',
	),
	'check_install' => array(
		'cache' => array(
			'nok' => '<em>./data/cache</em> klasör yetkisini kontrol edin. HTTP yazma yetkisi olmalı',
			'ok' => 'Önbellek klasörü yetkileri sorunsuz.',
		),
		'categories' => array(
			'nok' => 'Kategori tablosu kötü yapılandırılmış.',
			'ok' => 'Kategori tablosu sorunsuz.',
		),
		'connection' => array(
			'nok' => 'Veritabanı ile bağlantı kurulamıyor.',
			'ok' => 'Veritabanı ile bağlantı sorunsuz.',
		),
		'ctype' => array(
			'nok' => 'Karakter yazım kontrolü için kütüphane eksik (php-ctype).',
			'ok' => 'Karakter yazım kontrolü için kütüphane sorunsuz (ctype).',
		),
		'curl' => array(
			'nok' => 'cURL eksik (php-curl package).',
			'ok' => 'cURL eklentisi sorunsuz.',
		),
		'data' => array(
			'nok' => '<em>./data</em> klasör yetkisini kontrol edin. HTTP yazma yetkisi olmalı',
			'ok' => 'Veri klasörü yetkileri sorunsuz.',
		),
		'database' => 'Veritabanı kurulumu',
		'dom' => array(
			'nok' => 'DOM kütüpbanesi eksik (php-xml package).',
			'ok' => 'DOM kütüphanesi sorunsuz.',
		),
		'entries' => array(
			'nok' => 'Giriş tablosu kötü yapılandırılmış.',
			'ok' => 'Giriş tablosu sorunsuz.',
		),
		'favicons' => array(
			'nok' => '<em>./data/favicons</em> klasör yetkisini kontrol edin. HTTP yazma yetkisi olmalı',
			'ok' => 'Site ikonu klasörü yetkileri sorunsuz.',
		),
		'feeds' => array(
			'nok' => 'Akış tablosu kötü yapılandırılmış.',
			'ok' => 'Akış tablosu sorunsuz.',
		),
		'fileinfo' => array(
			'nok' => 'PHP fileinfo eksik (fileinfo package).',
			'ok' => 'fileinfo eklentisi sorunsuz.',
		),
		'files' => 'Dosya kurulumu',
		'json' => array(
			'nok' => 'JSON eklentisi eksik (php-json package).',
			'ok' => 'JSON eklentisi sorunsuz.',
		),
		'mbstring' => array(
			'nok' => 'Unicode için tavsiye edilen mbstring kütüphanesi bulunamadı.',
			'ok' => 'Unicode için tavsiye edilen mbstring kütüphaneniz mevcut.',
		),
		'pcre' => array(
			'nok' => 'Düzenli ifadeler kütüphanesi eksik (php-pcre).',
			'ok' => 'Düzenli ifadeler kütüphanesi sorunsuz (PCRE).',
		),
		'pdo' => array(
			'nok' => 'PDO veya PDO destekli bir sürücü eksik (pdo_mysql, pdo_sqlite, pdo_pgsql).',
			'ok' => 'PDO sorunsuz (pdo_mysql, pdo_sqlite, pdo_pgsql).',
		),
		'php' => array(
			'_' => 'PHP kurulumu',
			'nok' => 'PHP sürümünüz %s fakat FreshRSS için gerekli olan en düşük sürüm %s.',
			'ok' => 'PHP sürümünüz %s, FreshRSS ile tam uyumlu.',
		),
		'tables' => array(
			'nok' => 'Veritabanında bir veya daha fazla tablo eksik.',
			'ok' => 'Veritabanı tabloları sorunsuz.',
		),
		'title' => 'Kurulum kontrolü',
		'tokens' => array(
			'nok' => '<em>./data/tokens</em> klasör yetkisini kontrol edin. HTTP yazma yetkisi olmalı',
			'ok' => 'İşaretler klasörü yetkileri sorunsuz..',
		),
		'users' => array(
			'nok' => '<em>./data/users</em> klasör yetkisini kontrol edin. HTTP yazma yetkisi olmalı',
			'ok' => 'Kullanıcılar klasörü yetkileri sorunsuz.',
		),
		'zip' => array(
			'nok' => 'ZIP eklentisi eksik (php-zip package).',
			'ok' => 'ZIP eklentisi sorunsuz.',
		),
	),
	'extensions' => array(
		'author' => 'Yazar',
		'community' => 'Kullanılabilir topluluk eklentileri',
		'description' => 'Açıklama',
		'disabled' => 'Pasif',
		'empty_list' => 'Yüklenmiş eklenti bulunmamaktadır',
		'empty_list_help' => 'Boş uzantı listesinin arkasındaki nedeni belirlemek için günlükleri kontrol edin.',
		'enabled' => 'Aktif',
		'latest' => 'Kuruldu',
		'name' => 'İsim',
		'no_configure_view' => 'Bu eklenti yapılandırılamaz.',
		'system' => array(
			'_' => 'Sistem eklentileri',
			'no_rights' => 'Sistem eklentileri (düzenleme hakkınız yok)',
		),
		'title' => 'Eklentiler',
		'update' => 'Güncelleme mevcut',
		'user' => 'Kullanıcı eklentileri',
		'version' => 'Sürüm',
	),
	'stats' => array(
		'_' => 'İstatistikler',
		'all_feeds' => 'Tüm akış',
		'category' => 'Kategori',
		'entry_count' => 'Makale sayısı',
		'entry_per_category' => 'Kategori başı makale sayısı',
		'entry_per_day' => 'Günlük makale sayısı (last 30 days)',
		'entry_per_day_of_week' => 'Haftanın günü (ortalama: %.2f makale)',
		'entry_per_hour' => 'Saatlik (ortalama: %.2f makale)',
		'entry_per_month' => 'Aylık (average: %.2f makale)',
		'entry_repartition' => 'Giriş dağılımı',
		'feed' => 'Akış',
		'feed_per_category' => 'Kategoriye göre akışlar',
		'idle' => 'Boştaki akışlar',
		'main' => 'Ana istatistikler',
		'main_stream' => 'Ana akış',
		'no_idle' => 'Boşta akış yok!',
		'number_entries' => '%d makale',
		'overview' => 'Overview',	// TODO
		'percent_of_total' => '% toplamın yüzdesi',
		'repartition' => 'Makale dağılımı: %s',
		'status_favorites' => 'Favoriler',
		'status_read' => 'Okunmuş',
		'status_total' => 'Toplam',
		'status_unread' => 'Okunmamış',
		'title' => 'İstatistikler',
		'top_feed' => 'İlk 10 akış',
	),
	'system' => array(
		'_' => 'Sistem yapılandırması',
		'auto-update-url' => 'Otomatik güncelleme sunucu URL',
		'base-url' => array(
			'_' => 'Ana URL',
			'recommendation' => 'Otomatik öneri: <kbd>%s</kbd>',
		),
		'cookie-duration' => array(
			'help' => 'saniye',
			'number' => 'Oturum açık kalma süresi',
		),
		'force_email_validation' => 'Email doğrulamasını zorunlu kıl',
		'instance-name' => 'Örnek isim',
		'max-categories' => 'Kullanıcı başına kategori limiti',
		'max-feeds' => 'Kullanıcı başına akış limiti',
		'registration' => array(
			'number' => 'En fazla hesap sayısı',
			'select' => array(
				'label' => 'Kayıt Formu',
				'option' => array(
					'noform' => 'Devre Dışı: Kayıt Formu',
					'nolimit' => 'Devrede: Hesap limiti yok',
					'setaccountsnumber' => 'Maksimum hesap limitini ayarla',
				),
			),
			'status' => array(
				'disabled' => 'Form devre dışı',
				'enabled' => 'Form devrede',
			),
			'title' => 'Kullanıcı kayıt formu',
		),
		'sensitive-parameter' => 'Hassas parametre. <kbd>./data/config.php</kbd> adresinde elle düzenleyiniz.',
		'tos' => array(
			'disabled' => 'verilmedi',
			'enabled' => '<a href="./?a=tos">aktive edildi</a>',
			'help' => '<a href="https://freshrss.github.io/FreshRSS/en/admins/12_User_management.html#enable-terms-of-service-tos" target="_blank">Kullanım şartlarını</a> nasıl aktifleştiririm?',
		),
		'websub' => array(
			'help' => '<a href="https://freshrss.github.io/FreshRSS/en/users/WebSub.html" target="_blank">WebSub</a> hakkında',
		),
	),
	'update' => array(
		'_' => 'Sistem güncelleme',
		'apply' => 'Uygula',
		'changelog' => 'Değişiklik günlüğü',
		'check' => 'Güncelleme kontrolü',
		'copiedFromURL' => 'update.php %s lokasyonundan ./data lokasyonuna kopyalandı',
		'current_version' => 'Mevcut sürümünüz',
		'last' => 'Son kontrol',
		'loading' => 'Güncelleniyor…',
		'none' => 'Yeni güncelleme yok',
		'releaseChannel' => array(
			'_' => 'Sürüm kanalı',
			'edge' => 'Sürekli güncellenen sürüm (“edge”)',
			'latest' => 'Stabil sürüm (“latest”)',
		),
		'title' => 'Sistem güncelleme',
		'viaGit' => 'git ve GitHub.com ile gğncelleme başladı',
	),
	'user' => array(
		'admin' => 'Yönetici',
		'article_count' => 'Makaleler',
		'back_to_manage' => '← Kullanıcı listesine geri dön',
		'create' => 'Yeni kullanıcı oluştur',
		'database_size' => 'Veritabanı boyutu',
		'email' => 'Email adres',
		'enabled' => 'Aktif',
		'feed_count' => 'Akış',
		'is_admin' => 'yöneticidir',
		'language' => 'Dil',
		'last_user_activity' => 'Son kullanıcı hareketi',
		'list' => 'Kullanıcı Listesi',
		'number' => 'Oluşturulmuş %d hesap mevcut',
		'numbers' => 'Oluşturulmuş %d hesap mevcut',
		'password_form' => 'Şifre<br /><small>(Tarayıcı girişi için)</small>',
		'password_format' => 'En az 7 karakter',
		'title' => 'Kullanıcıları yönet',
		'username' => 'Kullanıcı adı',
	),
);
