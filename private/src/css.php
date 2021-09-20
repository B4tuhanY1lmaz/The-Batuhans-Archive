<?php
global $conf, $theme;
/*

READ ME FIRST!
Before everyone screams at me about using CSS this way (putting it in a PHP file and including it in the main script), know that the reason for this is to allow the use of theme variables set in the config to be used here in the styling.

*/
?>
<style>

/* Import fonts */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;600;700;800&display=swap');

* {
    font-family: "Segoe UI", "Open Sans", "Roboto", sans-serif;
    color: <?= $theme['fg'] ?>;
    line-height: 140%;
    text-size-adjust: none !important;
}

body {
    background: <?= $theme['bg'] ?>;
    padding: 0px;
    margin: 0px;
}

p {
    margin: 0px;
    padding: 0px;
    padding-bottom: 5px;
    text-size-adjust: none;
    font-size: 15px;
    line-height: 150%;
    /* This serves to prevent font boosting on mobile browsers */
    max-height: 9000px;
}

h1, h2, h3, h4, h5, h6 {
    padding: 0px;
    margin: 0px;
    font-family: "Montserrat";
    font-weight: bold;
    line-height: 120%;
    /* This serves to prevent font boosting on mobile browsers */
    max-height: 9000px;
}
h1 { font-size: 28px; }
h1:not(:first-child) { padding-top: 18px; }
h2 { font-size: 24px; }
h2:not(:first-child) { padding-top: 12px; }
h3 { font-size: 20px; }
h3:not(:first-child) { padding-top: 6px; }
h4 { font-size: 18px; }
h4:not(:first-child) { padding-top: 3px; }
h5, h6 { font-size: 16px; }

a {
    color: <?= $theme['hyperlink'] ?>;
    text-decoration: none;
}

a:hover, a:focus {
    color: <?= $theme['hyperlinkH'] ?>;
    text-decoration: underline;
}

#topbar {
    position: fixed;
    top: 0px;
    left: 0px;
    height: 55px;
    width: 100%;
    padding: 0px 15px;
    background: <?= $theme['bgTopbar'] ?>;
    border-bottom: 1px solid <?= $theme['topbarBorder'] ?>;
    z-index: 10;
    user-select: none;
    transition: 0.1s ease-in-out;
}

#topbar.shadow {
    box-shadow: 0px -17px 15px 14px rgba(0,0,0,0.7);
}

#topbarTitle {
    padding: 5px;
    font-family: "Montserrat", sans-serif;
    font-size: 24px;
    font-weight: bold;
    color: <?= $theme['fgTopbar'] ?>;
    background: none;
    border: none;
    transition: 0.1s ease-in-out;
}
#topbarTitle:hover, #topbarTitle:focus {
    color: <?= $theme['fgTopbarH'] ?>;
    text-decoration: none;
    cursor: default;
}

.topbarButton {
    line-height: 100%;
    padding: 8px;
    margin: 0px 3px;
    font-family: "Material Icons Outlined", "Material Icons";
    font-size: 28px;
    color: <?= $theme['fgTopbar'] ?>;
    background: none;
    border: none;
    border-radius: 20px;
    transition: 0.1s ease-in-out;
}

.topbarButton:hover:not(.disabled),
.topbarButton:focus:not(.disabled) {
    background: <?= $theme['bgTopbarButtonH'] ?>;
    color: <?= $theme['fgTopbarH'] ?>;
    text-decoration: none;
    cursor: default;
}

.topbarButton:active:not(.disabled) {
    background: <?= $theme['bgTopbarButtonC'] ?>;
}

.topbarButton.disabled {
    opacity: 50%;
    text-decoration: none;
}

#topbarButtonUp {
    margin-right: 5px;
}

#fileListContainer {
    max-width: 1000px;
    margin-top: 80px;
}

#fileListFilter {
    width: 100%;
    padding: 10px 16px;
    margin-bottom: 20px;
    background: rgba(0, 0, 0, 0);
    border: none;
    border-bottom: 2px solid <?= $theme['filterBarBottom'] ?>;
    border-radius: 4px 4px 0px 0px;
    outline: none;
    font-family: "Open Sans";
    font-size: 15px;
    color: <?= $theme['filterBarText'] ?>;
    transition: 0.1s ease-in-out;
    user-select: none;
}

#fileListFilter:focus {
    background: <?= $theme['filterBarBgF'] ?>;
    border-bottom: 2px solid <?= $theme['filterBarBottomF'] ?>;
}

#directoryHeader {
    margin-bottom: 10px;
    padding: 12px 18px;
    color: <?= $theme['fgDirectoryHeader'] ?>;
    background: <?= $theme['bgDirectoryHeader'] ?>;
    border-left: 6px solid <?= $theme['directoryHeaderBorder'] ?>;
    border-radius: 6px;
}

#fileListHeaders {
    border-bottom: 1px solid <?= $theme['fileSep'] ?>;
    user-select: none;
}

.fileListMobile { display: none; }
.fileListDesktop { display: inherit; }

.fileEntryIcon,
.fileEntryName,
.fileEntryDate,
.fileEntrySize,
.fileListHeader {
    padding: 7px 15px 8px 15px;
    font-size: 14px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

.fileEntryNameInner {
    font-size: 14px;
    padding-right: 10px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

.fileListHeader {
    font-size: 13px;
    color: <?= $theme['fileListHeaders'] ?>;
}

#fileListHeaderIcon, .fileEntryIcon {
    width: 50px;
}

#fileListHeaderDate, .fileEntryDate {
    width: 170px;
}

#fileListHeaderSize, .fileEntrySize {
    width: 80px;
}

#fileList {
    user-select: none;
}

.fileEntry {
    border-bottom: 1px solid <?= $theme['fileSep'] ?>;
    font-size: 14px;
    cursor: default;
    text-decoration: none !important;
}

.fileEntryName {
    color: <?= $theme['fileNameCol'] ?>;
}

.fileEntryDate {
    color: <?= $theme['fileDateCol'] ?>;
}

.fileEntrySize {
    color: <?= $theme['fileSizeCol'] ?>;
}

.fileEntry:hover,
.fileEntry:focus {
    background: <?= $theme['fileH'] ?>;
    border-color: rgba(0, 0, 0, 0);
}

.fileEntry:active {
    background: <?= $theme['fileC'] ?>;
    border-color: rgba(0, 0, 0, 0);
}

.fileEntryIcon {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0px;
    font-family: "Material Icons Outlined", "Material Icons";
    font-size: 22px;
    color: <?= $theme['fileIcon'] ?>;
    text-overflow: clip;
}

.fileEntryMobileDetails {
    color: <?= $theme['fileDateMobile'] ?>;
}

#fileListHint {
    margin: 25px 0px 30px 0px;
    font-size: 14px;
    color: <?= $theme['fileListFooter'] ?>;
    text-align: center;
}

#previewContainer {
    position: fixed;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    background: <?= $theme['bgPreview'] ?>;
    z-index: 20;
}

#previewTopbar {
    position: absolute;
    top: 0px;
    left: 0px;
    /* height: 75px; */
    height: 55px;
    width: 100%;
    padding: 0px 15px;
    background: <?= $theme['bgPreviewTopbar'] ?>;
    /* background: linear-gradient(180deg, <?= $theme['bgPreviewTopbar'] ?> 0%, rgba(0,0,0,0) 100%); */
    /* padding-bottom: 20px; */
    user-select: none;
    transition: 0.1s ease-in-out;
    z-index: 22;
    /* pointer-events: none; */
    box-shadow: 0px -17px 15px 14px rgba(0,0,0,0.7);
}

.previewTopbarButton {
    line-height: 100%;
    padding: 8px;
    margin: 0px 3px;
    font-family: "Material Icons Outlined", "Material Icons";
    font-size: 28px;
    color: <?= $theme['fgPreview'] ?>;
    background: none;
    border: none;
    border-radius: 20px;
    transition: 0.1s ease-in-out;
    pointer-events: initial;
}

.previewTopbarButton:hover:not(.disabled),
.previewTopbarButton:focus:not(.disabled) {
    background: <?= $theme['bgPreviewH'] ?>;
    color: <?= $theme['fgPreviewH'] ?>;
    text-decoration: none;
    cursor: default;
}

.previewTopbarButton:active:not(.disabled) {
    background: <?= $theme['bgPreviewC'] ?>;
}

.previewTopbarButton.disabled {
    opacity: 50%;
    text-decoration: none;
}

#previewTitleContainer {
    margin-top: 6px;
    padding: 0px 10px;
    overflow: hidden;
}

#previewFileName {
    display: block;
    margin-bottom: -4px;
    font-family: "Montserrat", "Segoe UI", sans-serif;
    font-size: 18px;
    font-weight: bold;
    color: <?= $theme['fgPreview'] ?>;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

#previewFileDesc {
    display: block;
    font-size: 16px;
    color: <?= $theme['fg2Preview'] ?>;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

#previewFile {
    position: absolute;
    top: 0px;
    left: 0px;
    height: calc(100% - 55px);
    width: 100%;
    margin-top: 55px;
}

.previewTypeNone,
.previewTypeVideo,
.previewTypeAudio,
.previewTypeImage {
    display: flex;
}
.previewTypeImage img {
    max-width: 100%;
    max-height: 100%;
    min-width: 48px;
    min-height: 48px;
    margin: auto;
}
.previewTypeVideo video {
    width: 100%;
    height: 100%;
    margin: auto;
}
#previewCard {
    margin: auto;
    padding: 10px;
    text-align: center;
    user-select: none;
}

.previewTypeVideo video:focus {
    outline: none;
}

#videoControls {
    display: none;
    user-select: none;
}

#videoBottomBar {
    position: absolute;
    bottom: 0px;
    left: 0px;
    width: calc(100% - 30px);
    margin: 15px;
}

.videoPill {
    padding: 8px 16px !important;
    background: <?= $theme['bg'] ?>;
    border-radius: 10px;
    box-shadow: 0px 3px 15px 0px rgba(0,0,0,0.3);
}

#videoPlayPauseSmall {
    display: flex;
    align-items: center;
    margin-right: 8px;
    font-family: "Material Icons";
    font-size: 20px;
}

#videoProgressTime {
    display: flex;
    align-items: center;
    margin-right: 8px;
    font-size: 15px;
}

#videoProgressBarTrack,
#videoProgressBarTrackFilled {
    position: absolute;
    margin-top: 8px;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 5px;
    border-radius: 2px;
    background: <?= $theme['bg2'] ?>;
}
#videoProgressBarTrackFilled {
    width: 0px;
    background: <?= $theme['accent'] ?>;
}

#videoProgressBar {
    position: absolute;
    margin-top: 4px;
    top: 0px;
    left: 0px;
    -webkit-appearance: none;
    appearance: none;
    width: 100%;
    outline: none;
    background: none;
}
#videoProgressBar::-webkit-slider-thumb {
    -webkit-appearance: none;
    background: <?= $theme['accent'] ?>;
    width: 12px;
    height: 12px;
    border-radius: 6px;
    transition: 0.1s ease-in-out;
}

.previewTypeAudio audio {
    margin: auto;
}
.previewTypeAudio audio:focus {
    outline: none;
}

.previewTypeNone {
    overflow-y: scroll;
}

#previewCardIcon {
    font-family: "Material Icons Outlined", "Material Icons";
    font-size: 64px;
    color: <?= $theme['fgPreviewIcon'] ?>;
    line-height: 100%;
    margin-bottom: 5px;
}

#previewCardTitle {
    font-family: "Montserrat", "Segoe UI", sans-serif;
    font-size: 28px;
    font-weight: bold;
    line-height: 120%;
    margin-bottom: 5px;
}

#previewCardDesc {
    font-size: 16px;
}

#previewCardDownloadCont {
    margin-top: 15px;
}

.popupBackground {
    position: fixed;
    display: flex;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    padding: 10px;
    overflow: hidden;
    background: rgba(0, 0, 0, 0.5);
    z-index: 50;
}

.popupCard {
    margin: auto;
    min-width: 200px;
    max-width: 600px;
    max-height: 100%;
    padding: 15px 20px;
    background: <?= $theme['bgPopup'] ?>;
    border-radius: 12px;
    box-shadow: 0px 4px 20px 8px rgba(0,0,0,0.3);
    overflow-y: scroll;
}
.popupCard::-webkit-scrollbar {
    width: 0px;
}

.popupTitle {
    font-family: "Montserrat", "Segoe UI", sans-serif;
    font-weight: bold;
    font-size: 20px;
    color: <?= $theme['fgPopup'] ?>;
    padding-bottom: 5px;
}

.popupContent {
    color: <?= $theme['fgPopup'] ?>;
}

.popupContent p:last-of-type {
    padding-bottom: 0px;
    margin-bottom: 0px;
}

.popupActions {
    margin: -5px -10px;
    padding-top: 15px;
    display: flex;
    justify-content: right;
    flex-wrap: wrap;
    user-select: none;
}

.popupButton {
    line-height: 100%;
    margin: 1px;
    padding: 10px 16px;
    font-family: "Montserrat", "Segoe UI", sans-serif;
    font-weight: bold;
    font-size: 15px;
    color: <?= $theme['fgPopupButton'] ?>;
    background: none;
    border: none;
    border-radius: 6px;
    cursor: default;
    transition: 0.1s ease-in-out;
}

.popupButton:hover,
.popupButton:focus {
    background: <?= $theme['bgPopupButtonH'] ?>;
    color: <?= $theme['fgPopupButton'] ?>;
    text-decoration: none;
}

.popupButton:active {
    background: <?= $theme['bgPopupButtonC'] ?>;
    color: <?= $theme['fgPopupButton'] ?>;
}

.dropdownHitArea {
    position: fixed;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    opacity: 0;
    z-index: 30;
}

.dropdown {
    position: fixed;
    top: 0px;
    left: 0px;
    max-width: 300px;
    max-height: 600px;
    margin: 10px;
    background: <?= $theme['bgDropdown'] ?>;
    padding: 8px 0px;
    border-radius: 8px;
    box-shadow: 0px 3px 15px 0px rgba(0,0,0,0.3);
    z-index: 31;
    user-select: none;
    overflow-y: scroll;
}

.dropdown::-webkit-scrollbar {
    width: 0px;
}

.dropdownItem {
    padding: 8px 12px;
    width: 100%;
}
.dropdownItem:hover:not(.disabled),
.dropdownItem:focus:not(.disabled) {
    background: <?= $theme['bgDropdownH'] ?>;
}

.dropdownItem.disabled {
    opacity: 50%;
}

.dropdownItemIcon {
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: "Material Icons Outlined", "Material Icons";
    font-size: 24px;
    color: <?= $theme['fgDropdown'] ?>;
}

.dropdownItemName {
    margin-left: 12px;
    margin-right: 6px;
    margin-top: 2px;
    font-size: 15px;
    color: <?= $theme['fgDropdown'] ?>;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}

.dropdownSep {
    width: 100%;
    height: 1px;
    margin: 5px 0px;
    background: <?= $theme['bgDropdownSep'] ?>;
}

.toastContainer {
    position: fixed;
    bottom: 0px;
    left: 0px;
    width: 100%;
    display: flex;
    padding: 10px;
    padding-bottom: 20px;
    z-index: 70;
    pointer-events: none;
}

.toast {
    margin: 0px auto;
    padding: 15px;
    color: <?= $theme['fgToast'] ?>;
    background: <?= $theme['bgToast'] ?>;
    border-left: 8px solid <?= $theme['bgToastBorder'] ?>;
    border-radius: 8px;
    box-shadow: 0px 3px 15px 0px rgba(0,0,0,0.3);
}

.buttonMain {
    padding: 10px 16px;
    font-family: "Montserrat", "Segoe UI", sans-serif;
    font-size: 15px;
    font-weight: bold;
    color: <?= $theme['fgButton'] ?>;
    background: <?= $theme['bgButton'] ?>;
    border: none;
    border-radius: 6px;
    transition: 0.1s ease-in-out;
}
.buttonMain:hover,
.buttonMain:focus {
    color: <?= $theme['fgButtonH'] ?>;
    background: <?= $theme['bgButtonH'] ?>;
}
.buttonMain:active {
    color: <?= $theme['fgButtonC'] ?>;
    background: <?= $theme['bgButtonC'] ?>;
}

/* Handle touch devices */
@media (hover: none) and (pointer: coarse) {
    * {
        line-height: 145%;
    }

    p, .toast {
        font-size: 16px;
    }

    #fileListFilter {
        padding-top: 12px;
        padding-bottom: 12px;
        font-size: 16px;
    }

    .fileListHeader {
        font-size: 15px;
    }

    .fileEntryName,
    .fileEntryDate,
    .fileEntrySize {
        padding: 10px 15px 10px 15px;
        font-size: 16px;
    }
    .fileEntryNameInner,
    .fileEntryMobileDetails {
        font-size: 16px;
    }

    #fileListHeaderIcon, .fileEntryIcon {
        width: 60px;
    }
    .fileEntryIcon {
        font-size: 26px;
    }
    
    #fileListHint { font-size: 15px; }

    .popupTitle { font-size: 22px; }

    .popupContent { font-size: 16px; }

    .popupButton {
        padding: 12px 20px;
        font-size: 17px;
    }

    .buttonMain {
        padding-top: 12px;
        padding-bottom: 12px;
        font-size: 16px;
    }

    #previewTitleContainer * {
        line-height: 140%;
    }

    .dropdownItem {
        padding: 10px 15px;
    }

    .dropdownItemIcon {
        font-size: 26px;
    }

    .dropdownItemName {
        font-size: 17px;
        margin-left: 15px;
        margin-top: 1px;
    }
}

/* Handle small screen widths */
@media only screen and (max-width: 600px) {
    .fileListMobile { display: inherit; }
    .fileListDesktop { display: none; }

    #directoryHeader {
        margin-bottom: <?php if (!$conf['mobileFileListBorders']) print("15px"); else print("initial"); ?>;
    }

    #fileListHeaders {
        display: <?php if (!$conf['mobileFileListBorders']) print("none"); else print("initial"); ?>;
        margin-bottom: <?php if (!$conf['mobileFileListBorders']) print("5px"); else print("initial"); ?>;
    }

    #fileListHeaders,
    #fileList {
        margin-left: -15px;
        margin-right: -15px;
    }

    .fileEntry {
        border: <?php if (!$conf['mobileFileListBorders']) print("none"); else print("initial"); ?>;
    }

    #fileListHeaderIcon, .fileEntryIcon {
        width: 60px;
    }
    .fileEntryIcon {
        font-size: 26px;
    }

    .fileEntryNameInner {
        padding-right: 15px;
    }

    #fileListHint {
        margin-top: <?php if (!$conf['mobileFileListBorders']) print("15px"); else print("initial"); ?>;
    }
}

/* Handle touch devices with small screen widths */
@media only screen and (max-width: 600px) and (hover: none) and (pointer: coarse) {
    .fileEntryIcon {
        font-size: 28px;
    }
    
    .fileEntryName {
        padding: 11px 15px 11px 15px;
    }
}

/* Transition animation classes */
.ease-in-out-100ms {
    transition: 0.1s ease-in-out;
}
.ease-in-out-200ms {
    transition: 0.2s ease-in-out;
}


/* Prevent font boosting on mobile browsers */
/* https://developpaper.com/question/why-do-fonts-of-the-same-size-display-different-sizes-in-different-browsers/ */
.noBoost {
    max-height: 9000px;
}

/* Custom placeholder text colour */
::placeholder {
    color: <?= $theme['textboxPlaceholder'] ?>;
    opacity: 1;
}

/* Custom text highlight colours */
::selection {
    background: <?= $theme['textHighlightBg'] ?>;
    color: <?= $theme['textHighlightFg'] ?>;
}
::-moz-selection {
    background: <?= $theme['textHighlightBg'] ?>;
    color: <?= $theme['textHighlightFg'] ?>;
}

/* Custom scrollabrs */
::-webkit-scrollbar {
    width: 10px;
}
::-webkit-scrollbar-thumb {
    background: <?= $theme['scrollbar'] ?>;
    border-radius: 4px;
}
::-webkit-scrollbar-thumb:hover {
    background: <?= $theme['scrollbarH'] ?>;
}
::-webkit-scrollbar-thumb:active {
    background: <?= $theme['scrollbarC'] ?>;
}
    
/* Disables transitions for all child elements */
.no-transitions *:not(.no-transitions-exclude) {
    -webkit-transition: none !important;
    -moz-transition: none !important;
    -ms-transition: none !important;
    -o-transition: none !important;
    transition: none !important;
}

/*

** Material Design Spinner **

<div class="mdSpinner">
    <svg viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="20" />
    </svg>
</div>

*/

.mdSpinner {
    width: 90px;
    height: 90px;
    margin: 0 auto;
}
.mdSpinner svg {
    animation: mdSpin-rotate 1.2s linear infinite;
    height: 100%;
    width: 100%;
}
.mdSpinner circle {
    stroke-dasharray: 1,200;
    stroke-dashoffset: 0;
    animation: mdSpin-dash 1.2s ease-in-out infinite 0s;
    stroke-linecap: round;
    fill: none;
    stroke: <?= $theme['loadingSpinner'] ?>;
    stroke-width: 5;
}

@keyframes mdSpin-rotate {
    100% {
        -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
    }
}
@keyframes mdSpin-dash {
    0% {
        stroke-dasharray: 1,200;
        stroke-dashoffset: 0;
    }
    50% {
        stroke-dasharray: 89,200;
        stroke-dashoffset: -35;
    }
    100% {
        stroke-dasharray: 89,200;
        stroke-dashoffset: -124;
    }
}

</style>