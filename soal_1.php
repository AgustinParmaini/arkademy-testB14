<?php
    function biodata(){
            
      $data->name = "Agustin Parmaini";
      $data->age = 24;
      $data->address = "Jl. Kapten A. Rivai Lorong Karya No 248 RT 002 RW 002 Palembang";
      $data->hobbies = array("Traveling", "Photography");
      $data->is_married = FALSE;
      
      $college->name = "STMIK GI MDP Palembang";
      $college->year_in = 2013;
      $college->year_out = "2017";
      $college->major = "S1 Sistem Informasi";
      $highSchool->name = "SMA Muhammadiyah 2 Palembang";
      $highSchool->year_in = 2010;
      $highSchool->year_out = 2013;
      $highSchool->major = "IPA";
      $data->list_school = array($college ,$highSchool);
      $skillPertama->skill_name = "Pemrograman PHP";
      $skillPertama->level = "Beginner";
      $skillKedua->skill_name = "Web Design";
      $skillKedua->level = "Beginner";
      $skillKetiga->skill_name = "HTML";
      $skillKetiga->level = "Beginner";
      $skillKeempat->skill_name = "CSS";
      $skillKeempat->level = "Beginner";
      $data->skills = array($skillPertama, $skillKedua, $skillKetiga, $skillKeempat);
      $interest_in_coding  = TRUE;
      
      echo json_encode($name, $age);
    }
    biodata();
?>