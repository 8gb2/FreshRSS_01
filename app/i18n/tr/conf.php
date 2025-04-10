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
	'archiving' => array(
		'_' => 'Arşiv',
		'exception' => 'Temizlik ifadeleri',
		'help' => 'Akış ayarlarında daha çok ayar bulabilirsiniz',
		'keep_favourites' => 'Favorileri asla silme',
		'keep_labels' => 'Etiketleri asla silme',
		'keep_max' => 'Bellekte tutulacak maksimum makale sayısı',
		'keep_min_by_feed' => 'Akışta en az tutulacak makale sayısı',
		'keep_period' => 'Bellekte tutulacak en eski makale tarihi',
		'keep_unreads' => 'Okunmamaış makaleleri asla silme',
		'maintenance' => 'Bakım',
		'optimize' => 'Veritabanını optimize et',
		'optimize_help' => 'Bu işlem bazen veritabanı boyutunu düşürmeye yardımcı olur',
		'policy' => 'Teimzleme politikası',
		'policy_warning' => 'Eğer temizleme politikası seçilmezse her makale bellekte tutulacaktır.',
		'purge_now' => 'Şimdi temizle',
		'title' => 'Arşivleme',
		'ttl' => 'Şu süreden sık otomatik yenileme yapma',
	),
	'display' => array(
		'_' => 'Görünüm',
		'darkMode' => array(
			'_' => 'Otomatik karanlık mod',
			'auto' => 'Otomatik',
			'help' => 'Yalnızca uyumlu temalar için',
			'no' => 'Kapalı',
		),
		'icon' => array(
			'bottom_line' => 'Alt çizgi',
			'display_authors' => 'Yazarlar',
			'entry' => 'Makale ikonları',
			'publication_date' => 'Yayınlama Tarihi',
			'related_tags' => 'İlgili etiketler',
			'sharing' => 'Paylaşım',
			'summary' => 'Özet',
			'top_line' => 'Üst çizgi',
		),
		'language' => 'Dil',
		'notif_html5' => array(
			'seconds' => 'saniye (0 zaman aşımı yok demektir)',
			'timeout' => 'HTML5 bildirim zaman aşımı',
		),
		'show_nav_buttons' => 'Gezinti düğmelerini göster',
		'theme' => array(
			'_' => 'Tema',
			'deprecated' => array(
				'_' => 'Kullanımdan kalkanlar',
				'description' => 'Bu tema artık desteklenmiyor ve <a href="https://freshrss.github.io/FreshRSS/en/users/05_Configuration.html#theme" target="_blank">FreshRSS in yeni sürümlerinde </a> kullanılamayacak',
			),
		),
		'theme_not_available' => '“%s” teması şuan uygun değilç Lütfen başka bir tema seçin.',
		'thumbnail' => array(
			'label' => 'Önizleme',
			'landscape' => 'Manzara',
			'none' => 'Hiçbiri',
			'portrait' => 'Portre',
			'square' => 'Kare',
		),
		'timezone' => 'Saat dilimi',
		'title' => 'Görünüm',
		'website' => array(
			'full' => 'simgesi and adı',
			'icon' => 'Sadece simgesi',
			'label' => 'Site',
			'name' => 'Sadece adı',
			'none' => 'Hiçbiri',
		),
		'width' => array(
			'content' => 'İçerik genişliği',
			'large' => 'Geniş',
			'medium' => 'Orta',
			'no_limit' => 'Sınırsız',
			'thin' => 'Zayıf',
		),
	),
	'logs' => array(
		'loglist' => array(
			'level' => 'Log Seviyesi',
			'message' => 'Log Mesajı',
			'timestamp' => 'Zaman Damgası',
		),
		'pagination' => array(
			'first' => 'İlk',
			'last' => 'Son',
			'next' => 'Sonraki',
			'previous' => 'Önceki',
		),
	),
	'privacy' => array(
		'_' => 'Gizlilik',
		'retrieve_extension_list' => 'Uzantı listesini al',
	),
	'profile' => array(
		'_' => 'Profil yönetimi',
		'api' => array(
			'_' => 'API yönetimi',
			'check_link' => 'Check API status via: <kbd><a href="../api/" target="_blank">%s</a></kbd>',	// TODO
			'disabled' => 'The API access is disabled.',	// TODO
			'documentation_link' => 'See the <a href="https://freshrss.github.io/FreshRSS/en/users/06_Mobile_access.html#access-via-mobile-app" target="_blank">documentation and list of known apps</a>',	// TODO
			'help' => 'See <a href="http://freshrss.github.io/FreshRSS/en/users/06_Mobile_access.html#access-via-mobile-app" target=_blank>documentation</a>',	// TODO
		),
		'delete' => array(
			'_' => 'Hesap silme',
			'warn' => 'Hesabınız ve tüm verileriniz silinecek.',
		),
		'email' => 'Email adresleri',
		'password_api' => 'API Şifresi<br /><small>(ör. mobil uygulamalar için)</small>',
		'password_form' => 'Şifre<br /><small>(Tarayıcı girişi için)</small>',
		'password_format' => 'En az 7 karakter',
		'title' => 'Profil',
	),
	'query' => array(
		'_' => 'Kullanıcı sorguları',
		'deprecated' => 'Bu sorgu artık geçerli değil. İlgili akış veya kategori silinmiş.',
		'description' => 'Açıklama',
		'filter' => array(
			'_' => 'Filtre uygulandı:',
			'categories' => 'Kategoriye göre göster',
			'feeds' => 'Akışa göre göster',
			'order' => 'Tarihe göre göster',
			'search' => 'İfade',
			'shareOpml' => 'İlgili kategorilerin ve yayınların OPML ile paylaşılmasını etkinleştir',
			'shareRss' => 'HTML ve RSS ile paylaşımı etkinleştir',
			'state' => 'Durum',
			'tags' => 'Etikete göre göster',
			'type' => 'Tür',
		),
		'get_A' => 'Show all feeds, also those shown in their category',	// TODO
		'get_Z' => 'Show all feeds, also archived ones',	// TODO
		'get_all' => 'Tüm makaleleri göster',
		'get_all_labels' => 'Herhangi etikete sahip makaleleri göster ',
		'get_category' => '“%s” kategorisini göster',
		'get_favorite' => 'Favori makaleleri göster',
		'get_feed' => '“%s” akışını göster',
		'get_important' => 'Önemli akışındaki makaleleri göster',
		'get_label' => '“%s” etiketine sahip makaleleri göster',
		'help' => '<a href="https://freshrss.github.io/FreshRSS/en/users/user_queries.html" target="_blank">Kullanıcı aramaları ve HTML / RSS / OPML ile paylaşım hakkında dökümantasyonu</a> görüntüleyin.',
		'image_url' => 'Resim Bağlantısı (URL)',
		'name' => 'İsim',
		'no_filter' => 'Filtre yok',
		'no_queries' => array(
			'_' => 'No user queries are saved yet.',	// TODO
			'help' => 'See <a href="https://freshrss.github.io/FreshRSS/en/users/user_queries.html" target="_blank">documentation</a>',	// TODO
		),
		'number' => 'Sorgu n°%d',
		'order_asc' => 'Önce eski makaleleri göster',
		'order_desc' => 'Önce yeni makaleleri göster',
		'search' => '“%s” için arama',
		'share' => array(
			'_' => 'Bu aramayı linkle paylaşın',
			'disabled' => array(
				'_' => 'disabled',	// TODO
				'title' => 'Sharing',	// TODO
			),
			'greader' => 'GReader JSON için paylaşılabilir bağlantı',
			'help' => 'Bu aramayı herhangi biriyle paylaşmak istiyorsanız bu bağlantıyı verin',
			'html' => 'HTML sayfasına paylaşılabilir bağlantı',
			'opml' => 'OMPL listesine paylaşılabilir bağlantı',
			'rss' => 'RSS akışına paylaşılabilir bağlantı',
		),
		'state_0' => 'Tüm makaleleri göster',
		'state_1' => 'Okunmuş makaleleri göster',
		'state_2' => 'Okunmamış makaleleri göster',
		'state_3' => 'Tüm makaleleri göster',
		'state_4' => 'Favori makaleleri göster',
		'state_5' => 'Okunmuş favori makaleleri göster',
		'state_6' => 'Okunmamış favori makaleleri göster',
		'state_7' => 'Favori makaleleri göster',
		'state_8' => 'Favori olmayan makaleleri göster',
		'state_9' => 'Favori olmayan okunmuş makaleleri göster',
		'state_10' => 'Favori olmayan okunmamış makaleleri göster',
		'state_11' => 'Favori olmayan makaleleri göster',
		'state_12' => 'Tüm makaleleri göster',
		'state_13' => 'Okunmuş makaleleri göster',
		'state_14' => 'Okunmamış makaleleri göster',
		'state_15' => 'Tüm makaleleri göster',
		'title' => 'Kullanıcı sorguları',
	),
	'reading' => array(
		'_' => 'Okuma',
		'after_onread' => '“Hepsini okundu say” dedinten sonra,',
		'always_show_favorites' => 'Öntanımlı olarak favori tüm makaleleri göster',
		'apply_to_individual_feed' => 'Tek tek akışlara uygulanır',
		'article' => array(
			'authors_date' => array(
				'_' => 'Yazarlar ve Tarih',
				'both' => 'Üst Bilgi ve Alt Bilgide',
				'footer' => 'Alt Bilgi',
				'header' => 'Üst Bilgi',
				'none' => 'Hiçbiri',
			),
			'feed_name' => array(
				'above_title' => 'Başlıklar/Etiklerin Üstünde',
				'none' => 'Hiçbiri',
				'with_authors' => 'Yazarlar ve tarihler satırında',
			),
			'feed_title' => 'Akış Başlığı',
			'icons' => array(
				'_' => 'Makale simgeleri konumu<br /><small>(Yalnızca okuma görünümü)</small>',
				'above_title' => 'Başlığın üstünde',
				'with_authors' => 'Yazarlar ve tarih satırında',
			),
			'tags' => array(
				'_' => 'Etiketler',
				'both' => 'Üst Bilgi ve Alt Bilgide',
				'footer' => 'Alt Bilgide',
				'header' => 'Üst Bilgide',
				'none' => 'Hiçbiri',
			),
			'tags_max' => array(
				'_' => 'Gösterilecek maksimum etiket sayısı',
				'help' => '0: Tüm etiketleri göster ve daraltma',
			),
		),
		'articles_per_page' => 'Sayfa başına makale sayısı',
		'auto_load_more' => 'Sayfa sonunda yeni makaleleri yükle',
		'auto_remove_article' => 'Okuduktan sonra makaleleri gizle',
		'confirm_enabled' => '“Hepsini okundu say” eylemi için onay iste',
		'display_articles_unfolded' => 'Katlaması açılmış makaleleri öntanımlı olarak göster',
		'display_categories_unfolded' => 'Katlaması açılacak kategoriler',
		'headline' => array(
			'articles' => 'Metinler: Açık/Kapalı',
			'articles_header_footer' => 'Metinler: üst bilgi/alt bilgi',
			'categories' => 'Sol navigasyon: Kategoriler',
			'mark_as_read' => 'Metini okundu olarak işaretle',
			'misc' => 'Çeşitli',
			'view' => 'Görünüm',
		),
		'hide_read_feeds' => 'Okunmamış makalesi olmayan kategori veya akışı gizle (“Tüm makaleleri göster” komutunda çalışmaz)',
		'img_with_lazyload' => 'Resimleri yüklemek için “tembel modu” kullan',
		'jump_next' => 'Bir sonraki benzer okunmamışa geç',
		'mark_updated_article_unread' => 'Güncellenen makaleleri okundu olarak işaretle',
		'number_divided_when_reader' => 'Okuma modunda ikiye bölünecek.',
		'read' => array(
			'article_open_on_website' => 'orijinal makale sitesi açıldığında',
			'article_viewed' => 'makale görüntülendiğinde',
			'focus' => 'Odaklanıldığında (önemli akışı hariç)',
			'keep_max_n_unread' => 'Okunmadı tutulacak maksimum metin sayısı',
			'scroll' => 'kaydırma yapılırken (önemli akışı hariç)',
			'upon_gone' => 'Yeni akışta üst sıralarda değilken',
			'upon_reception' => 'makale üzerinde gelince',
			'when' => 'Makaleyi okundu olarak işaretle…',
			'when_same_title_in_category' => 'Eğer kategorinin en yeni <i>n</i> makalesinde aynı başlık zaten mevcutsa',
			'when_same_title_in_feed' => 'Eğer aynı başlık akışın en yeni <i>n</i> makalesinde zaten mevcutsa',
		),
		'show' => array(
			'_' => 'Gösterilecek makaleler',
			'active_category' => 'Mevcut kategori',
			'adaptive' => 'Show unreads if any, all articles otherwise',	// TODO
			'all_articles' => 'Tüm makaleleri göster',
			'all_categories' => 'Tüm kategoriler',
			'no_category' => 'Hiçbir kategori',
			'remember_categories' => 'Açık kategorileri hatırla',
			'unread' => 'Sadece okunmamış makaleleri göster',
			'unread_or_favorite' => 'Show unreads and favourites',	// TODO
		),
		'show_fav_unread_help' => 'Etiketlerde de uygula',
		'sides_close_article' => 'Makale dışında bir alana tıklamak makaleyi kapatır',
		'sort' => array(
			'_' => 'Sıralama',
			'newer_first' => 'Önce yeniler',
			'older_first' => 'Önce eskiler',
		),
		'star' => array(
			'when' => 'Bir makaleyi favori olarak işaretle…',
		),
		'sticky_post' => 'Makale açıldığında yukarı getir',
		'title' => 'Okuma',
		'view' => array(
			'default' => 'Öntanımlı görünüm',
			'global' => 'Evrensel görünüm',
			'normal' => 'Normal görünüm',
			'reader' => 'Okuma görünümü',
		),
	),
	'sharing' => array(
		'_' => 'Paylaşım',
		'add' => 'Bir paylaşım türü ekle',
		'bluesky' => 'Bluesky',	// TODO
		'deprecated' => 'Bu servis kullanımdan kaldırılmıştır ve gelecekteki bir FreshRSS dağıtımında kaldırılacaktır. Daha fazla bilgi için <a href="https://freshrss.github.io/FreshRSS/en/users/08_sharing_services.html" title="Daha fazla bilgi için belgeyi açın" target="_blank">buraya</a> tıklayın.',
		'diaspora' => 'Diaspora*',	// IGNORE
		'email' => 'Email',	// IGNORE
		'facebook' => 'Facebook',	// IGNORE
		'more_information' => 'Daha fazla bilgi',
		'print' => 'Yazdır',
		'raindrop' => 'Raindrop.io',	// IGNORE
		'remove' => 'Paylaşım türünü sil',
		'shaarli' => 'Shaarli',	// IGNORE
		'share_name' => 'Paylaşım ismi',
		'share_url' => 'Paylaşım URL si',
		'title' => 'Paylaşım',
		'twitter' => 'Twitter',	// IGNORE
		'wallabag' => 'wallabag',	// IGNORE
	),
	'shortcut' => array(
		'_' => 'Kısayollar',
		'article_action' => 'Makale eylemleri',
		'auto_share' => 'Paylaş',
		'auto_share_help' => 'Sadece 1 paylaşım modu varsa bu kullanılır. Yoksa kendi paylaşım numaraları ile kullanılır.',
		'close_dropdown' => 'Menüleri kapat',
		'collapse_article' => 'Kapat',
		'first_article' => 'İlk makaleyi atla',
		'focus_search' => 'Arama kutusuna eriş',
		'global_view' => 'Evrensel görünüme geç',
		'help' => 'Dokümantasyonu göster',
		'javascript' => 'Kısayolları kullanabilmek için JavaScript aktif olmalıdır',
		'last_article' => 'Son makaleyi atla',
		'load_more' => 'Daha fazla makale yükle',
		'mark_favorite' => 'Favori olarak işaretle',
		'mark_read' => 'Okundu olarak işaretle',
		'navigation' => 'Genel eylemler',
		'navigation_help' => '<kbd>⇧ Shift</kbd> tuşu ile kısayollar akışlar için geçerli olur.<br/><kbd>Alt ⎇</kbd> tuşu ile kısayollar kategoriler için geçerli olur.',
		'navigation_no_mod_help' => 'Aşağıdaki kısayollar değiştiricileri desteklenmemektedir.',
		'next_article' => 'Sonraki makaleye geç',
		'next_unread_article' => 'Sıradaki okunmamış metni aç',
		'non_standard' => 'Bazı tuşlar (<kbd>%s</kbd>) kullanılamayabilir.',
		'normal_view' => 'Normal görünüme geç',
		'other_action' => 'Diğer eylemler',
		'previous_article' => 'Önceki makaleye geç',
		'reading_view' => 'Okuma görünümüne geç',
		'rss_view' => 'RSS akışı olarak aç',
		'see_on_website' => 'Orijinal sitede göster',
		'shift_for_all_read' => 'Önceki makaleyi okundu olarak işaretlemek için + <kbd>Alt ⎇</kbd> kısayolu<br />Tüm makaleleri okundu işaretlemek için + <kbd>⇧ Shift</kbd>kısayolu',
		'skip_next_article' => 'Açmadan bir sonraki makaleye geç',
		'skip_previous_article' => 'açmadan bir önceki makaleye geç',
		'title' => 'Kısayollar',
		'toggle_media' => 'Ortamı oynat/duraklat',
		'user_filter' => 'Kullanıcı filtrelerine eriş',
		'user_filter_help' => 'Eğer tek filtre varsa o kullanılır. Yoksa filtrelerin kendi numaralarıyla kullanılır.',
		'views' => 'Görüntülenme',
	),
	'user' => array(
		'articles_and_size' => '%s makale (%s)',
		'current' => 'Mevcut kullanıcı',
		'is_admin' => 'yöneticidir',
		'users' => 'Kullanıcılar',
	),
);
