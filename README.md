# RESELLER
Baran "/yonetici/hesap-olustur.php" sayfasından reseller hesap oluştur tıklayacak ve hesap oluşturacak burada genel bilgiler var ve önemli olan kısım bu bölümün altında yer alan Tüm Mağaza hesapları.
Bu mağaza hesaplarından açtığı reseller'e yetki verecek ve bu sayede "/reseller" sayfasından "Mağaza Kontrolü" bölümünden yetkisi olduğu mağazalardan birini seçecek ve sitenin en altında bu seçtiği mağazanın verdiği tüm siparişler gözükecek.
Bu siparişleri ürün detaylarına bakabilecek ve sadece bu. sadece seçtiği mağazanın siparişlerine bakabilecek.
Ayrıca header bölümünde bildirimler butonu var, orada mağaza eğer sipariş verdiyse oraya bildirim gelecek "Sipariş verildi" eğer sipariş kargodaysa bildirim gelecek vesaire. yani herşeyde bildirim gelecek örneğin personel siparişi iptal etti yine bildirim gelecek. "Personel Siparişi iptal etti"
Bu bildirim olayı tüm rank'lar için yani tüm sayfalar için geçerli olacak! Lütfen unutma :)


# SHOP-MANAGER
Shop manager anasayfasında görmüş olduğun gibi 2 bölüm var "Bakiye Bilgisi" ve "Borç Bilgisi" bu bölümde yer alan bakiye kısmı baran hesabı oluştururken shop managerin max ne kadarlık alışveriş yapabileceğini limit olarka sınırlayacak ve mağaza bu limit dışında alışveriş yapamayacak.
Borç bilgisi bölümünde ise shop managerin yaptığı alışveriş eğer ödenmediyse orada gözükecek, peki siparişin ödenip ödenmediği nasıl olacak dersende baranın panelinde borç kapat diye sayfa olacak ve ordan mağazayı seçecek, mağazayı seçtikten sonra ürünü seçecek ve inputa ödenen tutarı girecek.
bu bilgilerin hepsi "/shop-manager/siparis-fatura.php" sayfasında yer alacak.

Shop Manager header bölümünde seper butonu var burda siapriş ettiği ürünler otomatik sepete gidiyor ve son aşama olarak sepetten onaylayıp ürünü sipariş ediyor.

Destek talep bölümü felan standart zaten anlatmama gerek yok :)


# STAFF

shop managein verdiği siparişler otomatik "/staff/islemdeki-siparisler.php" bu sayfaya düşüyor ve buradan ürün hazırlanıyor, beklemede, tamamlandı, iptal edildi gibi seçeneklerden ürünün durumunu ayarlayabiliyor, ancak ürün iptal veya tamamlanmadığı sürece bu sayfada durmaya devam eder ve ürün tamamlanıp yada iptal edilirse "/staff/tum-siparisler.php" sayfasında yer alacaktır. ve bu "/yonetici" içinde geçerlidir çünkü bu sayfalar aynı.
