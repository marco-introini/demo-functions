<?php
  function main(array $args) : array
  {
      $number = $args["number"] ?? "NO TRAIN SPECIFIED";

      $trainInfo = "TRAIN info about $number";
      echo "Log: ".$trainInfo;
      return ["body" => $trainInfo];
  }
  