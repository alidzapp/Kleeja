<?php
//
// kleeja language file
// English
// By: Kleeja team & (NK, n.k@cityofangelz.com)
//

if (!defined('IN_COMMON'))
	exit;

if (empty($lang) || !is_array($lang))
	$lang = array();



$lang = array_merge($lang, array(
	//language inforamtion
	'DIR' 					=> 'ltr',
	'LANG_SMALL_NAME'		=> 'tr',

	'HOME' 					=> 'Ev',
	'INDEX' 				=> 'Ana Sayfa',
	'SITE_CLOSED' 			=> 'Site kapatıldı.',
	'STOP_FOR_SIZE' 		=> 'Hizmet askıya alındı.',
	'SIZES_EXCCEDED' 		=> 'Tüm alanımız doldu. Yeni alan için sipariş verildi. Lütfen daha sonra tekrar gelin.',
	'ENTER_CODE_IMG' 		=> 'Doğrulama kodunu girin.',
	'SAFE_CODE' 			=> 'İndirme için güvenlik kodu etkinleştir.',
	'LAST_VISIT' 			=> 'Son Ziyaret',
	'FLS_LST_VST_SEARCH' 	=> 'Dosya Yüklenme tarihi Göster',
	'IMG_LST_VST_SEARCH' 	=> 'Resim Yüklenme tarihi Göster',
	'NEXT' 					=> 'İleri &raquo;',
	'PREV' 					=> '&laquo; Geri',
	'INFORMATION' 			=> 'Talimatlar',
	'WELCOME' 				=> 'Hoşgeldiniz',
	'KLEEJA_VERSION' 		=> 'Kleeja versiyon',
	'NUMBER_ONLINE' 		=> 'kayıtlı çevrimiçi kullanıcılar',
	'NUMBER_UONLINE' 		=> 'kullanıcılar',
	'NUMBER_VONLINE' 		=> 'ziyaretçiler',
	'USERS_SYSTEM' 			=> 'Kullanıcı Sistemi',
	'ERROR_NAVIGATATION' 	=> 'Yönlendirme Hatası ..',
	'LOGIN' 				=> 'Giriş',
	'USERNAME' 				=> 'Kullanıcı Adı',
	'PASSWORD' 				=> 'Şifre',
	'EMPTY_USERNAME'		=> 'Lütfen Kullanıcı Adınızı Giriniz',
	'EMPTY_PASSWORD' 		=> 'Lütfen Şifrenizi Giriniz',
	'LOSS_PASSWORD' 		=> 'Şifreni mi Unuttun?',
	'LOGINED_BEFORE' 		=> 'Zaten giriş yapmış durumdasınız.',
	'LOGOUT' 				=> 'Çıkış ',
	'EMPTY_FIELDS' 			=> 'Hata ... Tüm Alanları Doldurduğunuza Emin Olun!',
	'LOGIN_SUCCESFUL' 		=> 'Başarıyla Giriş Yaptınız.',
	'LOGIN_ERROR' 			=> 'Hata ... Giriş yapılamıyor!',
	'REGISTER_CLOSED' 		=> 'Üzgünüm, üyelik alımları kapatılmış.',
	'PLACE_NO_YOU' 			=> 'Yasak Bölge',
	'NOT_EXSIT_USER'		=> 'Ulaşmaya çalıştığınız kullanıcı yok, ya da silindi.',
	'REGISTERED_BEFORE' 	=> 'zaten mevcut',
	'REGISTER' 				=> 'Kayıt ol',
	'EMAIL' 				=> 'E-posta adresi',
	'VERTY_CODE' 			=> 'Güvenlik Kodu',
	'WRONG_EMAIL' 			=> 'Geçersiz E-posta Adresi!',
	'WRONG_NAME' 			=> 'Kullanıcı adı 4 ile 25 karakter arası olmalıdır!',
	'WRONG_LINK' 			=> 'Geçersiz Bağlantı ..',
	'EXIST_NAME' 			=> 'Bu kullanıcı adı başka birisi tarafından daha önce alınmış!',
	'EXIST_EMAIL' 			=> 'Bu e-posta adresi ile birileri kayıtlı!',
	'WRONG_VERTY_CODE' 		=> 'Geçersiz Güvenlik Kodu!',
	'CANT_UPDATE_SQL' 		=> 'veritabanı güncellenemiyor!',
	'CANT_INSERT_SQL' 		=> 'veritabanına veri eklenemiyor!',
	'REGISTER_SUCCESFUL' 	=> 'Kayıt olduğunuz için teşekkürler.ً',
	'LOGOUT_SUCCESFUL' 		=> 'Başarıyla çıkış yaptınız.',
	'LOGOUT_ERROR' 			=> 'Çıkış yapılırken bir hata meydana geldi!',
	'FILECP' 				=> 'Dosya Yöneticisi',
	'DEL_SELECTED' 			=> 'Seçilenleri Sil',
	'EDIT_U_FILES' 			=> 'Dosyaları Güncelle',
	'FILES_UPDATED' 		=> 'Başarılı bir şekilde dosya güncellendi.',
	'PUBLIC_USER_FILES' 	=> 'Kullanıcı dosya&#039; klasörü',
	'FILEUSER' 				=> 'dosya&#039; klasörü',
	'GO_FILECP' 			=> 'Bu dosyaları yönetmek için tıklayınız',
	'YOUR_FILEUSER' 		=> 'Klasörünüz',
	'COPY_AND_GET_DUD' 		=> 'Arkadaşlarınızla paylaşmak için Adresi kopyalayın ',
	'CLOSED_FEATURE' 		=> 'Özellik Devre Dışı',
	'USERFILE_CLOSED' 		=> 'Kullanıcı klasörü özelliği devre dışı !',
	'PFILE_4_FORUM' 		=> 'Bilgileriniz değiştirmek için Kullanıcı Paneline gidin',
	'USER_PLACE' 			=> 'Kullanıcı Alanı',
	'PROFILE' 				=> 'Profil',
	'EDIT_U_DATA' 			=> 'Bilgilerini Güncelle',
	'PASS_ON_CHANGE' 		=> 'Şifre Değiştir',
	'OLD' 					=> 'Eski',
	'NEW' 					=> 'Yeni',
	'NEW_AGAIN' 			=> 'Onayla',
	'UPDATE' 				=> 'Güncelle',
	'PASS_O_PASS2' 			=> 'Eski şifre girilmelidir ve dikkatli bir şekilde yeni şifre girilmelidir.',
	'DATA_CHANGED_O_LO' 	=> 'Bilgileriniz güncellendi.',
	'CURRENT_PASS_WRONG'	=> 'Mevcut parola yanlış, bu verileri değiştirmek için mevcut parola doğru yazılmalıdır!',
	'DATA_CHANGED_NO' 		=> 'Yeni bir bilgi girilmedi.',
	'LOST_PASS_FORUM' 		=> 'Go to the forum to change your details ?',
	'GET_LOSTPASS' 			=> 'Şifrenizi Kurtarın',
	'E_GET_LOSTPASS' 		=> 'Lütfen şifrenizi almak için e-posta adresinizi girin.',
	'WRONG_DB_EMAIL' 		=> 'Belirtilen E-posta adresi, sistemimizde kayıtlı değil!',
	'GET_LOSTPASS_MSG' 		=> "You have asked for your password to be reset but, to avoid spam click on the link below for confirmation : \r\n %1\$s \r\n New Password : %2\$s",
	'CANT_SEND_NEWPASS' 	=> 'Hata... yeni şifre gönderilemedi!',
	'OK_SEND_NEWPASS' 		=> 'Yeni şifrenizi e-posta adresinize gönderdik',
	'OK_APPLY_NEWPASS' 		=> 'Yeni şifreniz aktifleştirildi. Hesabınıza giriş yapabilirsiniz.',
	'GUIDE' 				=> 'İzin Verilen Uzantılar',
	'GUIDE_EXP' 			=> 'İzin Verilen Uzantılar & Boyutlar',
	'EXT' 					=> 'Uzantı',
	'SIZE' 					=> 'Boyut',
	'REPORT' 				=> 'Bildir',
	'YOURNAME' 				=> 'Adınız',
	'URL' 					=> 'Adres',
	'REASON' 				=> 'Sebep',
	'NO_ID' 				=> 'Dosya seçilmedi ..!!',
	'NO_ME300RES' 			=> 'The Reason field cannot be more than 300 characters!!',
	'THNX_REPORTED' 		=> 'We have received your report, Thank you.',
	'RULES' 				=> 'Kullanım Şartları',
	'NO_RULES_NOW' 			=> 'Kullanım şartları şuan için girilmemiş. Lütfen daha sonra tekrar bakınız.',
	'E_RULES' 				=> 'Kullanım şartları aşağıda belirtilmiştir.',
	'CALL' 					=> 'İletişime Geç',
	'SEND' 					=> 'Gönder',
	'TEXT' 					=> 'Açıklama',
	'NO_ME300TEXT' 			=> 'Açıklama alanı 300 Karekterden uzun olamaz!!',
	'THNX_CALLED' 			=> 'Gönderildi ... en kısa zamanda bizden bir cevap alacaksınız.',
	'NO_DEL_F' 				=> 'Üzgünüm, dosya silme özelliği yönetici tarafından devre dışı bırakılmış.',
	'E_DEL_F' 				=> 'Dosya Silme Adresi',
	'WRONG_URL' 			=> 'Adreste bir sorun var ..',
	'CANT_DEL_F' 			=> 'Hata: dosya silinemiyor .. Önceden silinmiş olabilir!',
	'CANT_DELETE_SQL' 		=> 'Veritabanından silinemiyor!',
	'DELETE_SUCCESFUL' 		=> 'Başarıyla silindi.',
	'STATS' 				=> 'İstatistik',
	'STATS_CLOSED' 			=> 'İstatistik sayfası yönetici tarafından kapatılmış.',
	'FILES_ST' 				=> 'Yüklenen',
	'FILE' 					=> 'Dosya',
	'IMAGE' 				=> 'Resim',
	'USERS_ST' 				=> 'Toplam Kullanıcı',
	'USER' 					=> 'kullanıcı',
	'SIZES_ST' 				=> 'Yüklenen dosyaların toplam boyutu',
	'LSTFLE_ST' 			=> 'son yüklenen',
	'LSTDELST' 				=> 'İndırılmemiş dosyalar için son kontrol',
	'S_C_T' 				=> 'Bugünkü ziyaretçiler',
	'S_C_Y' 				=> 'Dün ziyaretçiler',
	'S_C_A' 				=> 'Toplam Ziyaretçi Sayısı',
	'LAST_1_H' 				=> 'Geçtiğimiz saat İstatistikleri',
	'DOWNLAOD' 				=> 'İndir',
	'FILE_FOUNDED' 			=> 'İçerik Bulundu .. ',
	'WAIT' 					=> 'Lütfen Bekleyin ..',
	'CLICK_DOWN' 			=> 'Buraya Tıklayarak İndiriniz',
	'JS_MUST_ON' 			=> 'Tarayıcınızda JavaScript etkinleştirin!',
	'FILE_INFO' 			=> 'Dosya Bilgisi',
	'FILENAME' 				=> 'Dosya Adı',
	'FILESIZE' 				=> 'Dosya Boyutu',
	'FILETYPE' 				=> 'Dosya Türü',
	'FILEDATE' 				=> 'Dosya Tarihi',
	'LAST_DOWN' 			=> 'Son indirilme',
	'FILEUPS' 				=> 'İndirilme Sayısı',
	'FILEREPORT' 			=> 'Kullanım Şartları İhlali Bildir',
	'FILE_NO_FOUNDED' 		=> 'Dosya bulunamıyor ..!!',
	'IMG_NO_FOUNDED' 		=> 'Resim bulunamıyor ..!!',
	'NOT_IMG' 				=> 'Bu bir resim değil!!',
	'MORE_F_FILES' 			=> 'Bu alan için giriş sınırı aşıldı.',
	'DOWNLOAD_F' 			=> '[ Dosya Yükle ]',
	'DOWNLOAD_T' 			=> '[ Adresten indir ]',
	'PAST_URL_HERE' 		=> '[ Adresi Buraya Yapıştır ]',
	'SAME_FILE_EXIST' 		=> '"%s" adında dosya zaten mevcut. Dosyayı yeniden adlandırıp yüklemeyi deneyin.',
	'NO_FILE_SELECTED' 		=> 'İlk önce bir dosya seçin !!',
	'WRONG_F_NAME' 			=> '"%s" dosya adında, yasaklanmış karekterler içeriyor.',
	'FORBID_EXT' 			=> '"%s" dosyasının uzantısı desteklenmiyor.',
	'SIZE_F_BIG' 			=> 'Dosyanızın boyutu "%1$s" sınırınızdan büyük. %2$s \'dan küçük olmalı.',
	'CANT_CON_FTP' 			=> 'Bağlanılamıyor ',
	'URL_F_DEL' 			=> 'Dosya silme bağlantısı',
	'URL_F_THMB' 			=> 'Küçük Resim Bağlantısı',
	'URL_F_FILE' 			=> 'Dosya Bağlantısı',
	'URL_F_IMG' 			=> 'Resim Bağlantısı',
	'URL_F_BBC' 			=> 'Forum Bağlantısı',
	'IMG_DOWNLAODED' 		=> 'Resim başarıyla yüklendi.',
	'FILE_DOWNLAODED' 		=> 'Dosya başarıyla yüklendi.',
	'CANT_UPLAOD' 			=> 'Hata: bilinmeyen bir sebepten dolayı, "%s" dosyası yüklenemedi!',
	'NEW_DIR_CRT' 			=> 'Yeni klasör oluşturuldu',
	'PR_DIR_CRT' 			=> 'Henüz klasör CHMOD değeri ayarlanmamış',
	'CANT_DIR_CRT' 			=> 'Klasör otomatik olarak oluşturulamadı, manuel olarak oluşturmalısınz.',
	'AGREE_RULES' 			=> 'Aşağıdaki butona tıklayarak, siz %1$skullanım şartlarını%2$s kabul etmiş sayılırsınız.',
	'CHANG_TO_URL_FILE' 	=> 'Yükleme metodunu değiştir',
	'URL_CANT_GET' 			=> 'adresten yükleme sırasında hata..',
	'ADMINCP' 				=> 'Yönetici Paneli',
	'JUMPTO' 				=> 'Gezinme',
	'GO_BACK_BROWSER' 		=> 'Geri Git',
	'U_R_BANNED' 			=> 'IP Adresiniz yasaklanmış.',
	'U_R_FLOODER' 			=> 'it&#039;s antiflood system ...',
	'YES' 					=> 'Evet',
	'NO' 					=> 'Hayır',
	'LANGUAGE' 				=> 'Dil',
	'STYLE' 				=> 'Stil',
	'NORMAL' 				=> 'Normal',
	'W_PHPBB' 				=> 'phpbb ekli',
	'W_MYSBB' 				=> 'MySmartBB ekli',
	'W_VBB' 				=> 'vb ekli',
	'GROUP' 				=> 'Kategori',
	'UPDATE_FILES' 			=> 'Dosyaları Güncelle',
	'BY' 					=> 'tarafından',
	'FILDER' 				=> 'Klasör',
	'DELETE' 				=> 'Sil',
	'GUST' 					=> 'Ziyaretçi',
	'NAME' 					=> 'İsim',
	'CLICKHERE' 			=> 'Buraya Tıklayın',
	'TIME' 					=> 'Zaman',
	'IP' 					=> 'IP',
	'N_IMGS' 				=> 'Resim',
	'N_ZIPS' 				=> 'ZIP Dosyası',
	'N_TXTS' 				=> 'TXT Dosyası',
	'N_DOCS' 				=> 'DOCS',
	'N_RM' 					=> 'RealMedia',
	'N_WM' 					=> 'WindowsMedia',
	'N_SWF' 				=> 'Flash Dosyası',
	'N_QT' 					=> 'QuickTime',
	'N_OTHERFILE' 			=> 'Diğer Dosyalar',
	'RETURN_HOME' 			=> 'Ana Sayfaya Dön',
	'TODAY' 				=> 'Bugün',
	'DAYS' 					=> 'Günler',
	'BITE' 					=> 'bayt',
	'SUBMIT' 				=> 'Gönder',
	'EDIT' 					=> 'Düzenle',
	'DISABLE' 					=> 'Devre Dışı Bırak',
	'ENABLE' 					=> 'Etkinleştir',	
	'OPEN'						=> 'Aç',
	'KILOBYTE'					=>	'Kilobayt',
	'NOTE'						=>	'Notlar',
	'WARN'						=>	'uyarı',
	'ARE_YOU_SURE_DO_THIS'		=> 'Bunu yapmak istediğine emin misiniz?',
	'SITE_FOR_MEMBER_ONLY'		=> 'Yükleme fonksiyonları sadece üyeler için aktif, kaydolun veya dosya yüklemek için giriş yapın.',
	'AUTH_INTEGRATION_N_UTF8_T'	=> '%s , utf 8 değil',
	'AUTH_INTEGRATION_N_UTF8' 	=> '%s , veritabanı Kleeja ile entegre olmak için utf-8 olmalı!',
	'SCRIPT_AUTH_PATH_WRONG'	=> '%s yolu geçerli değil.',
	'SHOW_MY_FILECP'			=> 'Dosyalarımı Göster',
	'PASS_CHANGE'				=> 'Şifre Değiştir',
	'EDIT_U_AVATER'				=> 'Profil Resminizi Değiştirin',
	'EDIT_U_AVATER_LINK'		=> 'Profil resminizi değiştirmek için %1$s BURAYA TIKLAYIN %2$s. Daha sonra karşınıza gelen siteye bu sitede kullandığınız E-posta adresiniz ile kayıt olun. Kayıt olduktan sonra profil resminizi yükleyin.',
	'MOST_EVER_ONLINE'			=> 'Bir çok kullanıcı bugüne kadar hiç çevrimiçi olmadı',
	'ON'						=> 'on',
	'LAST_REG'					=> 'En yeni üyemiz',
	'NEW_USER'					=> 'Yeni kullanıcı',
	'LIVEXTS'					=> 'Güncel Uzantılar',
	'ADD_UPLAD_A'				=> 'Daha fazla alan ekle',
	'ADD_UPLAD_B'				=> 'Alanları Kaldır',
	'COPYRIGHTS_X'				=> 'Tüm Hakları Saklıdır',
	'CHECK_ALL'	 				=> 'Hepsini Kontrol Et',
	'BROSWERF'					=> 'Kullanıcı Dosyaları',
	'REMME'						=> 'Beni Hatırla',
	'REMME_EXP'					=> 'Cihazınızı başka kişilerle paylaşmıyorsanız bu kutucuğu işaretleyin!',
	'HOUR'						=> 'bir saat',
	'5HOURS'					=> '5 saat',
	'DAY'						=> 'bir gün',
	'WEEK'						=> 'bir hafta',
	'MONTH'						=> 'bir ay',
	'YEAR'						=> 'bir yıl',
	'INVALID_FORM_KEY'			=> 'Geçersiz form veya oturum süresi doldu.',
	'INVALID_GET_KEY'			=> 'Üzgünüm, İstenen bağlantının süresi doldu ve güvenlik nedeniyle bloke edildi, geri dönüp tekrar deneyin.',
	'REFRESH_CAPTCHA'			=> 'Yeni bir CAPTCHA görüntüsü almak için tıklayın',
	'CHOSE_F'					=> 'En az bir dosya seçin',
	'NO_REPEATING_UPLOADING'	=> 'Yüklemenün ardından sayfayı yenilemeyin!.',
	'NOTE_CODE' 				=> 'Resimde gösterilen harfleri doğru bir şekilde girin',
	'USER_LOGIN'				=> ' Girş + Yalnızca Üyeler ',
	'FILES_DELETED' 			=> 'Dosya başarıyla silindi.',
	'GUIDE_GROUPS' 			    => 'Grup',
	'ALL_FILES' 			    => 'Tüm dosyaların sayısı',
	'ALL_IMAGES' 			    => 'Tüm resimlerin sayısı',
	'NO_FILE_USER'				=> 'Hesabınızda hiç içerik bulunamadı!',
	'SHOWFILESBYIP'				=> 'IP\'ye ait dosyları göster', 
	'WAIT_LOADING'				=> 'Lütfen bekleyin, dosyalar sunucuya yükleniyor...',
	'NOTICECLOSED'				=> 'Duyuru: Site Kapalı',
	'UNKNOWN'					=> 'Bilinmeyen',
	'WE_UPDATING_KLEEJA_NOW'	=> 'Bakım için kapalı, en kısa zamanda tekrar kontrol edin...',
	'ERROR_TRY_AGAIN'			=> 'Hata, Tekrar Deneyin.',
	'VIEW'						=> 'Görüntüle',
	'NONE'						=> 'Hiçbiri',
	'USER_STAT'					=> 'Kullanıcı istatistikleri',
	'SEARCH_STAT' 				=> 'Arama Motorları İstatistikler',
	'NOTHING'					=> 'Yeni bir dosya veya fotoğraf bulunamadı .. !!',
	'YOU_HAVE_TO_WAIT'			=> 'Lütfen %s saniye bekleyiniz .. daha sonra yeniden yüklemeyi deneyiniz',
	'REPEAT_PASS'				=> 'Şifre tekrar',
	'PASS_NEQ_PASS2'			=> 'Şifreler uyuşmuyor !',
	'LOAD_IS_HIGH_NOW'			=> 'Web sitemiz şu anda çok yoğun! !, lütfen bekleyin ve sayfayı yenileyerek tekrar deneyin.',
	#1.5
	'GROUP'						=> 'Grup',
	'ADMINS'					=> 'Yöneticiler',
	'GUESTS'					=> 'Ziyaretçiler',
	'USERS'						=> 'Kullanıcılar',
	'DELETE_INSTALL_FOLDER'		=> 'Kleeja\'yı kullanmaya başlamak için "INSTALL" klasörünü silmelisiniz.',
	'HV_NOT_PRVLG_ACCESS'		=> 'Bu sayfaya erişmek için yetkiniz yok.',
	'W_PERIODS' 		=> array("bir saniye", "bir dakika", "bir saat", "bir gün", "bir hafta", "bir ay", "bir yıl", "on yıl"),
	'W_PERIODS2'		=> array("iki saniye", "iki dakika", "iki saat", "iki gün", "iki hafta", "iki ay", "iki yıl", "iki on yıl"),
	'W_PERIODS_P'		=> array("saniye", "dakika", "saat", "gün", "hafta", "ay", "yıl", "on yıl"),
	'W_FROM' 			=> 'yaklaşık',
	'W_AGO' 			=> 'önce',
	'W_FROM NOW'		=> 'an itibariyle',
	'TIME_PM'			=> 'ÖS',
	'TIME_AM'			=> 'ÖÖ',
	'NOT_YET'			=> 'Henüz Değil!',
	'NOT_FOUND'			=> 'Bu dosya mevcut değil veya kullanıcı-yönetici tarafından silinmişde olabilir!.',
	'TIME_ZONE'			=> 'Zaman Dilimi',
	'OR'				=> 'veya',
	'AND'				=> 've',
	'CHANGE'			=> 'Değiştir',
	'FOR'				=> 'için',
	'ALL'				=> 'Tümü',
	'NOW'				=> 'Şimdi',

	//last line of this file ...					 
	'S_TRANSLATED_BY' 			=> 'Çeviri <a href="http://www.enginozturk.org/" target="_blank">Engin ÖZTÜRK</a> tarafından yapılmıştır. &amp; Kleeja Fans',
	
));

#<-- EOF
