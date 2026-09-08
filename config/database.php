<?php
  //Database configuration
  
  $LOCAL_HOST     = 'localhost'; //127.0.0.1
  $LOCAL_DBNAME   = 'app_beta1';
  $LOCAL_USERNAME = 'postgres';
  $LOCAL_PASSWORD = "unicesmag";
  $LOCAL_PORT     = "5432";


  //Database configuration
  $SUPA_HOST      = 'aws-1-us-east-1.pooler.supabase.com';
  $SUPA_DBNAME    = 'postgres';
  $SUPA_USERNAME  = "postgres.wxjljhifsentdpdxjgro";
  $SUPA_PASSWORD  = "unicesmag@@";
  $SUPA_PORT      = "6543";

  $local_data_connection = "
      host=$LOCAL_HOST
      dbname=$LOCAL_DBNAME
      user=$LOCAL_USERNAME
      port=$LOCAL_PORT
      password=$LOCAL_PASSWORD
  ";
   $supa_data_connection = "
      host=$SUPA_HOST
      dbname=$SUPA_DBNAME
      user=$SUPA_PASSWORD
      port=$SUPA_PORT
  ";
  

  $local_conn = pg_connect($local_data_connection);

  if(!$local_conn){
    echo "Error: Unable to connect to local database";
    exit();
  }else{
    echo "local_sucess connection !!!";
  }

  $supa_conn = pg_connect($supa_data_connection);
//supabase conecction
/*
  if(!$supa_conn){
    echo "Error: Unable to connect to supa database";
    exit();
  }else{
    echo "supa_sucess connection !!!";
  }
  */
?>