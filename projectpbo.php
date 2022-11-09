<h3> RIYANI K XI RPL </h3>
<?php
class Document {
    public $authors;
    public $date;

    public function setAuthors($authors){
        $this->authors = $authors;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function getAuthors(){
        return $this->authors;
    }

    public function getDate(){
        return $this->date;
    }
}
$ty = new Document();
$ty-> setAuthors("Authors : Puspita Pirsow");
$ty-> setDate("Tanggal Pembuatan : 01=december=2020");

echo $ty->getAuthors();
echo "<br>";
echo $ty->getDate();
echo "<br>";
echo "<hr>";

class Book extends Document {
    public $title;

    public function setTitle($title){
        $this->title = $title;
    }

    public function  setAuthors($authors){
        $this->authors = $authors;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getAuthors(){
        return $this->authors;
    }
}
$ty1 = new Book();
$ty1-> setTitle("Nama buku : Clandestine");

echo $ty1->getTitle();
echo "<br>";
echo $ty->getAuthors();
echo "<br>";
echo "<hr>";

class Email extends Book {
    public $subject;

    public function setSubject($subject){
        $this->subject = $subject;
    }

    public function getSubject(){
        return $this->subject;
    }

    

}

$ty2 = new Email();
$ty2-> setSubject("Menceritakan : Tadinya Disya hanya gadis penyendiri yang lebih suka menghabiskan waktu di kamar, membaca novel, menonton Drama Korea, atau mendengar musik sembari melamun. Kehidupannya berubah semenjak bertemu pria misterius bertopeng kuning. Disya terjebak dalam lingkaran iblis. Cinta melimpah yang dia terima, seharga dengan nyawanya.");

echo $ty2->getSubject();
echo "<br>";
echo $ty->getAuthors();
echo "<br>";
echo "<br>";