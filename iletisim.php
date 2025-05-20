<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Bu sayfa sadece form gönderimi sonrası görüntülenebilir.";
    exit;
}

function temizle($veri) {
    return htmlspecialchars(trim($veri));
}


$ad = temizle($_POST['ad']);
$email = temizle($_POST['email']);
$tel = temizle($_POST['tel']);
$cinsiyet = isset($_POST['cinsiyet']) ? temizle($_POST['cinsiyet']) : 'Seçilmedi';
$ilgi = isset($_POST['ilgi']) ? array_map('temizle', $_POST['ilgi']) : [];
$sehir = temizle($_POST['sehir']);
$mesaj = nl2br(temizle($_POST['mesaj']));


echo "<h2>Gönderilen İletişim Bilgileri</h2>";
echo "<strong>Ad Soyad:</strong> $ad<br>";
echo "<strong>E-posta:</strong> $email<br>";
echo "<strong>Telefon:</strong> $tel<br>";
echo "<strong>Cinsiyet:</strong> $cinsiyet<br>";
echo "<strong>İlgi Alanları:</strong> " . (!empty($ilgi) ? implode(', ', $ilgi) : 'Seçilmedi') . "<br>";
echo "<strong>Şehir:</strong> $sehir<br>";
echo "<strong>Mesaj:</strong><br> $mesaj<br><br>";

echo '<a href="iletisim.html"><button>Geri Dön</button></a>';
?>
