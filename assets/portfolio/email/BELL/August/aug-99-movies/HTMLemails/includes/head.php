<?php include('../vars.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <title><?php if ($cc === "1A1E" || $cc === "3A1E" || $cc === "1B1E" || $cc === "2A1E" || $cc === "4A1E" || $cc === "1B1E") { echo $preheader_en; } else { echo $preheader_fr; } ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="http://web.e.bell.ca/15/0729-BellTest/font.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
    div,
    p,
    a,
    li,
    td,
    * {
        -webkit-text-size-adjust: none;
    }
    
    .ExternalClass {
        line-height: 120% !important;
    }
    
    .ExternalClass * {
        line-height: 120% !important;
    }
    
    .body a {
        text-decoration: none;
        color: #555555;
    }
    
    .body-copy-blue a {
        text-decoration: none;
        color: #0066a4;
    }
    
    .headline a {
        text-decoration: none;
        color: #212121;
    }
    
    .headline-alt a,
    .footer a {
        text-decoration: none;
        color: #ffffff;
    }
    
    .headline-blue a {
        text-decoration: none;
        color: #0066a4;
    }
    
    div.preheader {
        display: none !important;
    }
    
    @media only screen and (max-width: 620px) {
        table[class~=full-width] {
            width: 100% !important;
        }
        img[class~=full-width] {
            width: 100% !important;
            padding: 0 !important;
            height: auto !important;
        }
        td[class~=full-width] {
            width: 100% !important;
        }
        td[class~=mobile-padding-outer] {
            width: 5% !important;
        }
         td[class~=mobile-padding] img {
            display: block !important;
        }
        td[class~=mobile-padding-outer] img {
            width: 100% !important;
        }
        td[class~=mostly-full-width-outer] {
            width: 90% !important;
            min-width: 90% !important;
        }
        td[class~=mobile-padding] {
            width: 9% !important;
            display: block !important;
        }
        td[class~=mobile-padding-title] {
            width: 3.5% !important;
        }
        td[class~=mobile-padding] img,
        td[class~=mobile-padding-title] img {
            width: 100% !important;
        }
        td[class~=mostly-full-width] {
            width: 82% !important;
            min-width: 82% !important;
        }
        td[class~=mostly-full-width-title] {
            width: 93% !important;
            min-width: 93% !important;
        }
        hr[class~=horizontal-rule] {
            width: 100% !important;
        }
        table[class~=l-col] {
            width: 100% !important;
        }
        table[class~=r-col] {
            width: 100% !important;
            border-left: none !important;
        }
        table[class~=r-col] img {
            margin-left: auto !important;
            margin-right: auto !important;
        }
        table[class~=l-col-2] {
            width: 100% !important;
            padding-top: 2px !important;
        }
        table[class~=r-col-2] {
            width: 100% !important;
            border-left: none !important;
        }
        table[class~=r-col-2] td {
            padding-top: 37px !important;
        }
        table[class~=l-col-icon-caption] {
            width: 100% !important;
        }
        table[class~=r-col-icon-caption] {
            width: 100% !important;
            border-left: none !important;
        }
        table[class~=icon] {
            width: 42px !important;
        }
        table[class~=icon] td {
            padding-bottom: 0px !important;
        }
        table[class~=caption] {
            width: auto !important;
        }
        td[class~=caption-holder] {
            padding-left: 20px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }
        td[class~=caption-content] {
            height: 43px !important;
            width: auto !important;
            font-size: 15px !important;
        }
        td[class~=l-col-icon-caption-padding] {
            padding-bottom: 21px !important;
        }
        td[class~=no-keyline] {
            border-right: none !important;
        }
        table[class~=mobile-hidden],
        tr[class~=mobile-hidden],
        td[class~=mobile-hidden],
        span[class~=mobile-hidden],
        img[class~=mobile-hidden] {
            display: none !important;
        }
        tr[class~=mobile-hidden] td {
            display: none !important;
        }
        tr[class~=mobile] {
            display: table-row !important;
        }
        td[class~=mobile] {
            display: table-cell !important;
        }
        div[class~=mobile] {
            display: block !important;
            height: auto !important;
            max-height: none !important;
            overflow: visible !important;
            float: none !important;
        }
        img[class~=centered] {
            margin-left: auto !important;
            margin-right: auto !important;
        }
        table[class~=table-align-center] {
            margin-left: auto !important;
            margin-right: auto !important;
        }
        td[class~=text-align-left] {
            text-align: left !important;
        }
        td[class~=text-align-center] {
            text-align: center !important;
        }
        td[class~=mobile-padding-top-img] {
            padding-top: 30px !important;
        }
        table[class~=mobile-border] {
            border: none !important;
            border-top: 1px solid #939393 !important;
        }
        td[class~=mobile-icon-width] {
            width: 62px !important;
        }
        table[class~=mobile-view-online] {
            padding-right: 5% !important;
        }
        td[class~=mobile-border-hidden] {
            border: none !important;
        }
        img[class~=mobile-img-unlimited] {
            display: block !important;
            width: 192px !important;
            height: 95px !important;
        }
        td[class~=mobile-pricing-legal] {
            padding-bottom: 23px !important;
        }
        tr[class~=mobile] {
            display: table-row !important;
        }
        td[class~=mobile] {
            display: table-cell !important;
        }
        div[class~=mobile] {
            display: block !important;
            height: auto !important;
            max-height: none !important;
            overflow: visible !important;
            float: none !important;
        }
        table[class~=btn-padding] {
            padding-top: 8px !important;
        }
        table[class~=mobile-poster-height] {
            height: 155px !important;
        }
        table[class~=no-float-top] {
            float: none !important;
        }
        table[class~=no-float-bottom] {
            float: none !important;
        }
        img[class~=popcorn-padding] {
            padding-top: 10px !important;
        }
        td[class~=small-mobile-poster-width-bottom] {
            padding-top: 10px !important;
        }
        table[class~=no-border-right] {
            border-right: none !important;
        }
        table[class~=small-mobile-poster-width-solo] {
            max-width: 50% !important;
        }
        img[class~=mobile-poster] {
            width: 100% !important;
            height: auto !important;
            max-width: 200px !important;
        }
        img[class~=mobile-poster-2] {
            width: 85% !important;
            max-width: 200px !important;
            height: auto !important;
        }
        table[class~=poster-table] {
            max-width: 100% !important;
        }
        td[class~=mobile-shown] {
            display: block !important;
        }
        table[class~=half-width] {
            width: 50% !important;
            height: 320px !important;
        }
        td[class~=movie-title] {
            font-size: 25px !important;
        }
        td[class~=padding-top-0] {
            padding-top: 0 !important;
        }
        td[class~=bot-pad-30] {
            padding-bottom: 30px !important;
        }
        td[class~=bot-pad-0] {
            padding-bottom: 0px !important;
        }
        img[class~=mobile-poster-2] {
            width: 85% !important;
            max-width: 160px !important;
            height: auto !important;
        }
        td[class~=border-bottom] {
            border-bottom:1px solid #939393 !important;
        }

        /* Footer */
        table[class~=mobile-l-3-col-footer-nav-bell-en],
        table[class~=mobile-m-3-col-footer-nav-bell-en] {
            width: 100% !important;
        }
        table[class~=mobile-l-3-col-footer-nav-bell-fr],
        table[class~=mobile-m-3-col-footer-nav-bell-fr] {
            width: 100% !important;
        }
        table[class~=mobile-r-3-col-footer-nav] {
            width: 100% !important;
        }
        td[class~=mobile-l-3-col-footer-nav-item-l-bell-en] {
            width: 40% !important;
            padding-top: 6px !important;
            padding-bottom: 15px !important;
        }
        td[class~=mobile-l-3-col-footer-nav-item-r-bell-en] {
            width: 60% !important;
            padding-top: 6px !important;
            padding-bottom: 15px !important;
        }
        td[class~=mobile-m-3-col-footer-nav-item-l-bell-en] {
            width: 40% !important;
            padding-bottom: 15px !important;
        }
        td[class~=mobile-m-3-col-footer-nav-item-r-bell-en] {
            width: 60% !important;
            padding-bottom: 15px !important;
        }
        td[class~=mobile-l-3-col-footer-nav-item-l-bell-fr] {
            width: 40% !important;
            padding-top: 6px !important;
            padding-bottom: 15px !important;
        }
        td[class~=mobile-m-3-col-footer-nav-item-l-bell-fr] {
            width: 40% !important;
            padding-bottom: 15px !important;
        }
        td[class~=mobile-l-3-col-footer-nav-item-r-bell-fr] {
            width: 60% !important;
            padding-top: 6px !important;
            padding-bottom: 15px !important;
        }
        td[class~=mobile-m-3-col-footer-nav-item-r-bell-fr] {
            width: 60% !important;
            padding-bottom: 15px !important;
        }
        td[class~=mobile-r-3-col-footer-nav-item] {
            width: 100% !important;
            padding-bottom: 4px !important;
        }
        a[class~=link-break] {
            display: block !important;
        }
        td[class~=footer-border] {
            border-top: 1px solid #939393 !important;
        }
        /* FOOTER STYLE END */
    }
    
    @media only screen and (max-width: 430px) {
        img[class~=mobile-header-bellement] {
            width: 50% !important;
            height: auto !important;
        }
        img[class~=logo] {
            width: 47px !important;
            height: auto !important;
        }
        img[class~=logo-2] {
            width: 110px !important;
            height: auto !important;
        }
        td[class~=footer-text-align-left] {
            text-align: left !important;
        }
        td[class~=mobile-logo-top-padding] {
            padding-top: 18px !important;
        }
        td[class~=mobile-logo-top-padding-2] {
            padding-top: 18px !important;
        }
        img[class~=mobile-logo-bottom-padding] {
            height: 17px !important;
        }
        td[class~=mobile-width-bellament] {
            width: 80% !important;
            height: auto !important;
        }
        img[class~=mobile-width-bellament] {
            width: 100% !important;
            height: auto !important;
        }
        td[class~=footer-text-align-left] {
            text-align: left !important;
        }
        img[class~=mobile-logo-bottom-padding] {
            height: 17px !important;
        }
        td[class~=main-title] {
            font-size: 26px !important;
        }
        td[class~=sub-title] {
            font-size: 22px !important;
        }
        td[class~=sub-title-2] {
            font-size: 18px !important;
        }
        td[class~=sub-title-3] {
            font-size: 22px !important;
        }
        td[class~=body-copy] {
            font-size: 15px !important;
        }
        sup[class~=mobile-sub-title-1-sup] {
            font-size: 11px !important;
            vertical-align: 6px !important;
        }
        sup[class~=mobile-sub-title-2-sup] {
            font-size: 11px !important;
            vertical-align: 6px !important;
        }
        sup[class~=mobile-sub-title-3-sup] {
            font-size: 12px !important;
            vertical-align: 8px !important;
        }
        sup[class~=mobile-body-copy-sup] {
            font-size: 11px !important;
            vertical-align: 4px !important;
        }
        td[class~=mobile-pricing-holder] {
            padding-bottom: 7px !important;
        }
        td[class~=pricing-dollars] {
            font-size: 84px !important;
        }
        td[class~=pricing-cents] {
            font-size: 24px !important;
            padding-top: 7px !important;
        }
        a[class~=link-break] {
            display: block !important;
        }
        span[class~=footer-mobile-hidden] {
            display: none !important;
        }
        table[class~=half-width] {
            width: 50% !important;
            height: 320px !important;
        }
        td[class~=movie-title] {
            font-size: 20px !important;
        }
        img[class~=solo-poster] {
            max-width: 45% !important;
        }
    }
    
    @media only screen and (max-width: 390px) {
        table[class~=no-float-top] {
            float: none !important;
        }
        table[class~=no-float-bottom] {
            float: none !important;
        }
        td[class~=small-text] {
            font-size: 9px !important;
        }
        img[class~=half-width-bottom] {
            width: 80px !important;
            height: auto !important;
        }
        img[class~=third] {
            width: 80px !important;
            height: auto !important;
        }
        table[class~=half-width] {
            width: 50% !important;
            height: 300px !important;
        }

        /* FONT START */
        [style*="bellslimregular"] {
            font-family: 'bellslimregular', Arial, Helvetica, sans-serif;
        }
        /* FONT END */
    }
    
    @media only screen and (max-width: 350px) {
        table[class~=half-width] {
            width: 50% !important;
            height: 280px !important;
        }
    }
    /* CUSTOM FOR VIDEO */
    
    @media screen and (-webkit-min-device-pixel-ratio: 0) {
        div[class~=video-wrap] {
            height: 305px !important;
            position: relative;
            overflow: hidden;
            padding: 0;
            margin: 0;
        }
        video[class~=video] {
            /*min-height: 100%;
        min-width: 100%;*/
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: auto;
            z-index: 1;
            display: inline-block !important;
        }
        img[class~=img] {
            visibility: hidden !important;
        }
    }
    /* iPAD MEDIA QUERY */
    
    @media only screen and (max-device-width: 1080px) {
        video[class~=video] {
            display: none !important;
            z-index: -1;
        }
        img[class~=img] {
            visibility: visible !important;
        }
    }
    
    @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 620px) {
        div[class="video-wrap"] {
            /*height: 177px !important;*/
            height: auto !important;
        }
    }
    </style>
    <!-- OUTLOOK FONT FIX START -->
    <!--[if mso]>

<style>
  [style*="bellslimregular"] {
    font-family: Arial, Helvetica, san-serif !important;
  }
  td, .main-title {
    font-family: Arial, Helvetica, san-serif !important;
   }
</style>

<![endif]-->
    <!-- OUTLOOK FONT FIX END -->
</head>