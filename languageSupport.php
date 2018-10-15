<?php
$kode_bahasa = '';

switch ($tujuan) {
  case 'inggris':
  case 'Inggris':
  case 'english':
  case 'uk':
  case 'england':
    $kode_bahasa = 'en';
    break;

  case 'belanda':
  case 'Belanda':
  case 'netherland':
    $kode_bahasa = 'nl';
    break;

    case 'italia':
    case 'Italia':
    case 'itali':
      $kode_bahasa = 'it';
      break;

      case 'cina':
      case 'Cina':
      case 'China':
      case 'china':
      case 'chinese':
      case 'mandarin':
        $kode_bahasa = 'zh';
        break;

        case 'korea':
        case 'Korea':
        case 'hangul':
        case 'hanggul':
        case 'korsel':
          $kode_bahasa = 'ko';
          break;

          case 'jepang':
          case 'Jepang':
          case 'japan':
          case 'japanese':
          $kode_bahasa ='ja';
          break;

          case 'jerman':
          case 'Jerman':
          case 'germany':
          $kode_bahasa = 'de';
          break;

          case 'perancis':
          case 'Perancis':
          case 'france':
          case 'prancis':
          case 'french':
          $kode_bahasa = 'fr';
          break;

          case 'thailand':
          case 'Thailand':
          case 'thai':
          $kode_bahasa ='th';
          break;

          case 'hindi':
          case 'Hindi':
          case 'india':
          case 'hindia':
          $kode_bahasa = 'hi';
          break;

          case 'spanyol':
          case 'Spanyol':
          case 'spain':
          case 'spanish':
          $kode_bahasa = 'es';
          break;

          case 'rusia':
          case 'Rusia':
          case 'russia':
          case 'russian':
          $kode_bahasa = 'ru';
          break;

          case 'arab':
          case 'Arab':
          case 'arabic':
          case 'arabian':
          $kode_bahasa='ar';
          break;

          case 'javanese':
          case 'Jawa':
          case 'java':
          case 'jawa':
          $kode_bahasa='jv';
          break;

case 'indonesia':
  $kode_bahasa = 'id';
  break;

    default:
    $kode_bahasa = 'null';
    break;
}

 ?>
