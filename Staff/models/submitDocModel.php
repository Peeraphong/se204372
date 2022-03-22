<?php
    ini_set('memory_limit', '4096M');
    class SubmitDoc{
        public $intern_coop;
        public $petition;
        public $nisit_no;
        public $name_surname;
        public $telephone_no;
        public $facebook_name;
        public $intern_position;
        public $person1_name;
        public $pos_ps1;
        public $company_name;
        public $house_number;
        public $street;
        public $districts;
        public $amphures;
        public $provinces;
        public $postcode;
        public $HR_name;
        public $HR_number;
        public $email;
        public $start_intern;
        public $end_intern;
        public $salary;
        public $room;

        public function __construct($intern_coop,$petition,$nisit_no,$name_surname,$telephone_no,$facebook_name,$intern_position,$person1_name,$pos_ps1,$company_name,$house_number,
        $street,$districts,$amphures,$provinces,$postcode,$HR_name,$HR_number,$email,$start_intern,$end_intern,$salary,$room){
            $this->intern_coop = $intern_coop;
            $this->petition = $petition;
            $this->nisit_no = $nisit_no;
            $this->name_surname = $name_surname;
            $this->telephone_no = $telephone_no;
            $this->facebook_name = $facebook_name;
            $this->intern_position = $intern_position;
            $this->person1_name = $person1_name;
            $this->pos_ps1 = $pos_ps1;
            $this->company_name = $company_name;
            $this->house_number = $house_number;
            $this->street = $street;
            $this->districts = $districts;
            $this->amphures = $amphures;
            $this->provinces = $provinces;
            $this->postcode = $postcode;
            $this->HR_name = $HR_name;
            $this->HR_number = $HR_number;
            $this->email = $email;
            $this->start_intern = $start_intern;
            $this->end_intern = $end_intern;
            $this->salary = $salary;
            $this->room = $room;
        }

        public static function getAll(){
            $submitList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM form_internship";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $intern_coop = $my_row['intern_coop'];
                $petition = $my_row['petition'];
                $nisit_no = $my_row['nisit_no'];
                $name_surname = $my_row['name_surname'];
                $telephone_no = $my_row['telephone_no'];
                $facebook_name = $my_row['facebook_name'];
                $intern_position = $my_row['intern_position'];
                $person1_name = $my_row['person1_name'];
                $pos_ps1 = $my_row['pos_ps1'];
                $company_name = $my_row['company_name'];
                $house_number = $my_row['house_number'];
                $street = $my_row['street'];
                $districts = $my_row['districts'];
                $amphures = $my_row['amphures'];
                $provinces = $my_row['provinces'];
                $postcode = $my_row['postcode'];
                $HR_name = $my_row['HR_name'];
                $HR_number = $my_row['HR_number'];
                $email = $my_row['email'];
                $start_intern = $my_row['start_intern'];
                $end_intern = $my_row['end_intern'];
                $salary = $my_row['salary'];
                $room = $my_row['room'];

                $submitList[]=new SubmitDoc($intern_coop,$petition,$nisit_no,$name_surname,$telephone_no,$facebook_name,$intern_position,$person1_name,$pos_ps1,$company_name,$house_number,
                $street,$districts,$amphures,$provinces,$postcode,$HR_name,$HR_number,$email,$start_intern,$end_intern,$salary,$room);
            }
            require("connection_close.php");
            return $submitList;
        }

        public static function add($intern_coop,$petition,$nisit_no,$name_surname,$telephone_no,$facebook_name,$intern_position,$person1_name,$pos_ps1,$company_name,$house_number,
        $street,$districts,$amphures,$provinces,$postcode,$HR_name,$HR_number,$email,$start_intern,$end_intern,$salary,$room){
            require("connection_connect.php");

            $sql = "INSERT INTO `form_internship` (`intern_coop`,`petition`,`nisit_no`,`name_surname`,`telephone_no`,`facebook_name`,`intern_position`,`person1_name`,`pos_ps1`,`company_name`,`house_number`,
            `street`,`districts`,`amphures`,`provinces`,`postcode`,`HR_name`,`HR_number`,`email`,`start_intern`,`end_intern`,`salary`,`room`) VALUES ('$intern_coop','$petition','$nisit_no','$name_surname',
            '$telephone_no','$facebook_name','$intern_position','$person1_name','$pos_ps1','$company_name','$house_number','$street','$districts','$amphures','$provinces','$postcode','$HR_name','$HR_number',
            '$email','$start_intern','$end_intern','$salary','$room')";

            $result = $conn->query($sql);

            require("connection_close.php");

            return("add success $result row");
            
        }
    }

?>