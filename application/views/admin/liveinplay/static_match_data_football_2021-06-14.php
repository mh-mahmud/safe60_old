<!-- <link rel="stylesheet" href="https://sporty24.net/styles/adminica/all.css"> -->

<style>
    /*----- Boxes -------*/
    .box {
      position: relative;
      background: #fff;
      margin-bottom: 15px;
      padding: 0;
      border-radius: 5px;
      box-shadow: 0 2px 0 1px rgba(0, 0, 0, 0.03);
    }
    .box h2.box_head {
      font-size: 12px;
      font-weight: 700;
      line-height: 32px;
      color: #fff;
      margin: 0 auto;
      text-indent: 10px;
      text-shadow: 0 1px 0 #000;
      border-width: 1px;
      border-style: solid;
      user-select: none;
    }
    .box h2.box_head span {
      color: #fff;
      font-weight: 400;
      font-size: 11px;
    }
    .box h2.box_head span a {
      color: #fff;
      opacity: .75;
    }
    .box h2.box_head span a:hover {
      opacity: 1;
    }
    .box .controls {
      position: absolute;
      right: 0;
      top: -1px;
    }
    .box .controls button {
      margin: 9px 7px 0 5px;
    }
    .box.light h2.box_head,
    .box.light h2.box_head small {
      border-color: #959BA2;
      color: #333!important;
      text-shadow: 0 1px 0 #FFF!important;
    }
    .box.light a.toggle {
      background-image: url(../../images/interface/lite_toggle.png);
    }
    .box.light a.show_all_tabs {
      background-image: url(../../images/icons/small/white/blocks_images.png);
    }
    .box h2.box_head small {
      font: normal 11px sans-serif;
      color: #ddd;
    }
    .block h2 small {
      font: normal 12px sans-serif;
      color: #aaa;
      letter-spacing: normal;
      margin-left: 5px;
    }
    .box a.toggle {
      background: rgba(0, 0, 0, 0.1) url(../../images/interface/toggle.png) 2px -15px no-repeat;
      display: block;
      height: 17px;
      width: 19px;
      border: 1px solid rgba(0, 0, 0, 0.2);
      float: right;
      margin: 8px 7px 0 0;
      border-radius: 3px;
      box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3);
    }
    .box a.toggle:hover {
      border: 1px solid rgba(0, 0, 0, 0.35);
    }
    .box a.toggle_closed {
      background-position: 2px 2px;
    }
    .box a.show_all_tabs {
      background: rgba(0, 0, 0, 0.1) url(../../images/icons/small/white/blocks_images.png) -2px -3px no-repeat;
      display: block;
      height: 17px;
      width: 19px;
      border: 1px solid rgba(0, 0, 0, 0.2);
      float: right;
      margin: 8px 7px 0 0;
      border-radius: 3px;
      box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3);
    }
    a.show_all_tabs:hover {
      border: 1px solid rgba(0, 0, 0, 0.35) !important;
    }
    .box a.grabber {
      background: url(../../images/interface/grabber.gif) no-repeat;
      background: url(../../images/interface/grabber-trans.png) no-repeat;
      display: block;
      height: 22px;
      width: 22px;
      float: right;
      margin: 6px 6px 0 0;
      cursor: move;
      opacity: .8;
    }
    .box a.grabber:hover {
      opacity: 1;
    }
    .all_open .block {
      border: 1px solid #ccc!important;
      border-width: 0 1px 1px!important;
      height: auto!important;
    }
    .box .block {
      padding: 0 10px;
      padding: 0;
      margin-top: 0;
      position: relative;
      background: none;
      border: 1px solid #ccc;
      border-width: 0 1px 1px;
      background: #fff;
    }
    .box.no_titlebar .block {
      border-width: 1px;
    }
    .box .block.tab_sider {
      border-width: 1px 1px 1px 0;
    }
    .box .section {
      padding: 15px;
      margin: 0;
    }
    .section.small {
      padding: 5px;
    }
    .section.small p {
      margin-bottom: 5px;
      line-height: 15px;
    }
    .section.lines {
      border-top: 1px solid #ddd;
      border-right: 1px solid #ddd;
      margin-top: -1px;
      margin-right: -1px;
    }
    .box .block h1.section,
    .box .block h2.section,
    .box .block h3.section {
      padding-bottom: 15px;
    }
    /* List styles */
    ul.flat {
      border: none;
      margin-top: 0;
      margin-bottom: 0;
      padding: 0;
    }
    ul.flat li {
      margin: 0 0 0 1px;
      margin-left: 0;
      border-bottom: 1px solid #eee;
      width: auto;
      padding: 5px 10px!important;
      list-style: none;
      display: block;
    }
    ul.flat.large li {
      padding: 15px 20px!important;
    }
    ul.flat.small li {
      padding: 0 10px !important;
    }
    ul.flat li:first-child {
      border-top: 1px solid #eee;
    }
    ul.flat:first-child li:first-child {
      border-top: 0;
    }
    ul.flat:last-child li:last-child {
      border-bottom: 0;
    }
    ul.flat li img {
      float: left;
      margin: 0 10px 0 -5px;
    }
    ul.flat li img.send_right {
      margin: 0 -5px 0 10px;
    }
    ul.flat li h3 {
      margin: 5px 0;
    }
    ul.flat li p {
      margin: 0;
    }
    .dashed_placeholder {
      display: inline-block;
      margin: 0 0.9%;
      background: #eee;
      outline: 1px dashed #bbb;
    }
    .flat_area {
      margin-bottom: 15px;
      margin-top: 0;
    }
    .flat_area > p {
      text-shadow: 0 1px 0 #fff;
      padding: 0 10px;
    }
    .flat_area > :last-child {
      margin-bottom: 0;
    }
    .flat_area h2 {
      border: none;
      background: none;
      border-bottom: 1px solid #ccc;
      padding: 2px 5px 10px;
      box-shadow: 0 1px 0 #fff;
    }
    .flat_area h2 .holder {
      float: right;
      margin: -5px -5px 0 0;
    }
    .flat_area h2 .holder > label {
      font-size: 11px;
      font-family: sans-serif;
      font-weight: normal;
      color: #666;
      letter-spacing: 0;
    }
    .flat_area h2 .holder > * {
      display: inline-block;
    }
    .glass .flat_area h1,
    .glass .flat_area h2,
    .glass .flat_area h3,
    .glass .flat_area h4,
    .glass .flat_area h5 {
      color: #fff;
      border-color: #000;
      box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3);
      box-shadow: none;
      text-shadow: 0 1px 0 #000;
    }
    .glass .flat_area h1 small,
    .glass .flat_area h2 small,
    .glass .flat_area h3 small,
    .glass .flat_area h4 small,
    .glass .flat_area h5 small {
      color: #ddd;
    }
    .glass .flat_area p {
      color: #f3f3f3;
    }
    /* Indented Bar / Area */
    .indented_button_bar {
      border: 1px solid #959BA2;
      background: #ccc;
      padding: 5px;
    }
    .indented_button_bar.has_columns {
      padding: 8px 10px;
    }
    .indented_button_bar .section {
      padding: 10px;
    }
    .indented_button_bar .columns,
    .indented_button_bar .columns > div,
    .indented_button_bar .columns fieldset {
      border: 0;
      margin: 0;
    }
    .indented_button_bar button {
      margin-bottom: 0;
    }
    .indented_area {
      border-radius: 3px;
      margin-bottom: 15px;
    }
    .indented_area .box {
      border-radius: 3px;
      margin: 0 0 10px;
      position: relative;
      box-shadow: 0 2px 0 1px rgba(0, 0, 0, 0.06), 0 1px 0 rgba(255, 255, 255, 0.2) inset;
      border: 1px solid #959BA2;
    }
    .indented_area .box .block {
      border: 0;
      border-radius: 3px;
    }
    /* Mask Container */
    .mask_content {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: #fff;
      z-index: 500;
      padding: 15px 10px;
      background: #F6F7F8;
    }
    /*-----End of Main Container -------*/
    /*--------------------------------
    Loading Overlay
    --------------------------------*/
    #loading_overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 9999;
    }
    #loading_overlay .loading_message {
      background: #fff;
      padding: 0;
      line-height: 25px;
      height: 30px;
      border: 1px solid #fff;
      position: absolute;
      top: 0;
      left: 50%;
      width: 150px;
      margin-left: 23px;
      text-align: center;
      color: #333;
      font-weight: 700;
    }
    .isolate #loading_overlay .loading_message {
      margin-left: -75px !important;
    }
    #loading_overlay .loading_message img {
      margin: 7px auto;
    }
    /*
    .box,.block,.flat_area,.indent,.dropdown_menu {
        opacity:0;
    }
    */
    /*----- End of Loading Overlay -------*/
    /*--------------------------------
        Bradcrumb and Toggle All
    --------------------------------*/
    .breadcrumb {
      float: left;
    }
    ul.breadcrumb {
      border: 1px solid #aaa;
    }
    ul.breadcrumb > li {
      float: left;
      display: block;
      height: 20px;
      line-height: 20px;
      border-width: 0;
      font-size: 11px;
    }
    ul.breadcrumb > li > a,
    ul.breadcrumb > li > span {
      display: block;
      padding: 0 5px 0 17px;
      background: url(../../images/interface/breadcrumb_divider.png) no-repeat;
      background-position: -5px;
    }
    ul.breadcrumb > li:first-child > a {
      background: none;
      padding: 0 0 0 5px;
    }
    ul.breadcrumb > li:last-child > span {
      padding: 0 10px 0 17px;
      font-weight: 700;
    }
    /* Toggle All slider */
    .toggle_all {
      border: 1px solid #aaa;
    }
    .toggle_all > a {
      padding-right: 40px;
      padding-left: 8px;
      text-align: right;
      right: 0;
      margin-top: 1PX;
      background: url(../../images/interface/box_toggle_h.png) 96% bottom no-repeat;
    }
    .toggle_all.closed > a {
      background-position: 96% top;
    }
    .toggle_all a {
      color: #666!important;
      display: block;
      height: 20px;
      white-space: nowrap;
    }
    .toggle_all a:hover {
      color: #333!important;
    }
    .toggle_all .show_all {
      display: none;
    }
    .toggle_all.closed .show_all {
      display: block;
    }
    .toggle_all.closed .close_all {
      display: none;
    }
    /*-----End of Bradcrumb and Toggle All -------*/
    /*--------------------------------
    Form Elements
    --------------------------------*/
    form {
      margin-bottom: 0!important;
    }
    fieldset {
      position: relative;
      border: 1px solid #ddd;
      border-width: 0 0 1px 0;
    }
    .no_lines fieldset,
    fieldset.no_lines,
    .no_lines .section,
    .section.no_lines,
    .no_lines fieldset.label_side > label,
    fieldset.no_lines.label_side > label,
    .no_lines fieldset.label_side > div,
    fieldset.no_lines.label_side > div {
      border-color: transparent!important;
    }
    .columns > div > fieldset {
      border-right: 1px solid #ddd;
    }
    .columns > .col_100 > fieldset {
      border-right: 0px solid #ddd;
    }
    .columns > div > fieldset.right {
      border-right-width: 0;
      margin-right: 0;
    }
    .columns > div > fieldset.bottom {
      border-bottom-width: 0;
      margin-bottom: 0;
    }
    fieldset.top {
      border-top-width: 1px;
      margin-top: -1px;
    }
    fieldset.bottom {
      border-bottom-width: 0px;
      margin-bottom: 0px;
    }
    fieldset > label {
      font-size: 13px;
      font-weight: 700;
      padding: 15px 20px 10px;
      margin-right: 10px;
      display: block;
      color: #333;
    }
    fieldset > label span {
      display: inline;
      font-weight: 400;
      font-size: 11px;
      font-family: sans-serif;
      color: #999;
      margin-left: 5px;
      line-height: 8px;
    }
    fieldset > label span.click {
      cursor: pointer;
    }
    fieldset > div {
      width: auto;
      padding: 0 20px 15px;
    }
    fieldset > div > .text,
    fieldset > div > .select2 {
      margin-top: 10px;
      margin-bottom: 0px;
    }
    fieldset > div > *:first-child {
      margin-top: 0px;
    }
    fieldset > div > .value {
      margin-top: 3px;
      font-size: 13px;
      font-weight: 700;
      display: block;
      color: #333;
    }
    fieldset > div > p.comment {
      margin-top: 10px;
    }
    label.error {
      font-weight: 700;
      font-size: 10px;
      background: #DA202C;
      color: #fff;
      position: absolute;
      bottom: 8px;
      right: 7px;
      display: block;
      line-height: 20px;
      padding: 0 5px;
      border-radius: 3px;
      border: 1px solid #9E253B;
      border-width: 1px 0 0 1px;
    }
    input.text,
    .textarea,
    .ui-multiselect,
    table input.text,
    .chzn-container-multi .chzn-choices {
      width: 100%!important;
      box-sizing: border-box;
      border: 0;
      background: rgba(0, 0, 0, 0.05);
      box-shadow: inset 0 0 2px 0 #ddd;
      border-radius: 1px;
    }
    input.text {
      line-height: 32px;
      height: 32px;
      padding: 0 0 0 5px;
    }
    input.text.width_50 {
      width: 50%;
    }
    input.text.width_25 {
      width: 25%;
    }
    input.text.width_75 {
      width: 25%;
    }
    .textarea_holder,
    .textarea {
      padding: 5px 0 0 5px;
      min-height: 50px;
    }
    .textarea_holder > textarea {
      height: 100px;
      width: 100%;
      display: block;
    }
    input.text:hover,
    .textarea:hover {
      box-shadow: inset 0 0 2px 0 #aaa;
    }
    input.text:focus,
    .textarea:focus {
      box-shadow: inset 0 0 2px 0 #555;
    }
    .required_tag {
      background: url(../../images/interface/input_required.png) top right;
      width: 40px;
      height: 40px;
      display: block;
      position: absolute;
      right: 0;
      top: -1px;
      margin-top: 0;
    }
    fieldset.label_side > label {
      width: 100px;
      position: relative;
      float: left;
      left: 0;
      /* padding: 15px 20px; */

      border-right: 1px solid #eee;
      clear: left;
      line-height: 15px;
      margin-bottom: -5px;
      margin-top: 5px;
    }
    fieldset.label_side > label > span {
      display: block;
      margin: 5px 0 -15px;
      line-height: normal;
    }
    fieldset.label_side > label > span > a {
      color: #999;
    }
    fieldset.label_side > div {
      width: auto;
      margin-left: 140px;
      padding: 15px 20px;
      border-left: 1px solid #eee;
      clear: right;
    }
    .compressed fieldset > div,
    fieldset.compressed > div {
      width: auto;
      padding: 8px 10px 7px;
      clear: right;
    }
    .compressed fieldset.label_side > div,
    fieldset.label_side.compressed > div {
      border-left: 1px solid #eee;
      margin-left: 122px;
    }
    .compressed fieldset.label_side > label,
    fieldset.compressed.label_side > label {
      line-height: 10px;
    }
    .compressed fieldset > label,
    fieldset.compressed > label {
      padding: 10px 11px 5px;
    }
    .compressed fieldset.label_side.label_small > label,
    fieldset.label_side.label_small.compressed > label {
      width: 88px;
    }
    .compressed fieldset.no_label > div,
    fieldset.compressed.no_label > div {
      padding: 8px 9px;
    }
    fieldset.label_side > div > input.text {
      width: 100%;
    }
    fieldset.label_side.label_small > label {
      width: 70px;
    }
    fieldset.label_side.label_small > div {
      margin-left: 110px;
    }
    fieldset.no_label > div {
      padding: 15px 20px;
    }
    fieldset.label_top.empty_label > div {
      margin-top: 23px;
      padding: 15px 20px;
    }
    fieldset > div > label {
      display: block;
      line-height: 25px;
    }
    fieldset > div > label:first-child {
      margin-top: -3px;
    }
    fieldset > div.inline > label.text {
      display: inline-block;
      line-height: 26px;
      margin-right: 10px;
      margin-top: 0;
    }
    fieldset > div > label input[type=radio],
    fieldset > div > label input[type=checkbox] {
      margin-right: 8px;
    }
    fieldset > div > button {
      margin-bottom: 0;
    }
    .edit_text input {
      background: #fff;
      margin-bottom: 10px;
      border: none;
    }
    .button_bar {
      padding: 10px;
      border: 1px solid #fff;
      border-top: 1px solid #aaa;
      margin: -1px -1px;
      clear: both;
    }
    .ui-dialog .button_bar,
    .isolate .button_bar {
      margin: -1px 0 0 0;
    }
    .button_bar.small {
      padding: 5px;
    }
    .ui-dialog .button_bar {
      margin: 0;
      border-width: 1px 0 0 0;
      border-top: 1px solid #BAC5CC;
    }
    .button_bar button {
      margin-bottom: 0;
    }
    .button_bar label,
    .indented_button_bar label {
      line-height: 30px;
      float: left;
      font-weight: 700;
    }
    .button_bar label {
      margin: 0 15px 0 5px;
    }
    .indented_button_bar label {
      margin: 0 15px 0 10px;
    }
    .button_bar button.send_right,
    .indented_button_bar button.send_right {
      margin-right: 0!important;
      margin-left: 5px!important;
    }
    .button_bar p,
    .indented_button_bar p {
      float: left;
      margin: 6px 10px;
    }
    .alert {
      border: 1px solid #999;
      padding: 5px;
      padding-left: 5px;
      margin-bottom: 10px;
      color: #fff;
      text-shadow: 0 1px 1px #000;
    }
    .section > :first-child {
      margin-top: 0;
    }
    .section > :last-child {
      margin-bottom: 0;
    }
    .alert:hover {
      cursor: pointer;
    }
    .alert img {
      margin: -3px 5px 0 0;
      float: left;
    }
    .alert.badge {
      position: absolute;
      display: block;
      z-index: 100;
      right: -5px !important;
      top: -8px !important;
      margin: 0;
      text-align: center;
      padding: 2px 4px!important;
      line-height: 7px;
      height: 10px;
      text-indent: 0;
      font-size: 11px;
      border: 2px solid #fff!important;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
      border-radius: 10px;
      zoom: 1;
    }
    select {
      margin-right: 5px;
      margin-bottom: 14px;
      margin-right: 5px;
      margin-top: 8px;
    }
    select.full_width {
      display: block;
      width: 100%!important;
    }
    .time_picker_holder .selector,
    .inline .selector,
    .inline select {
      float: left;
    }
    .slider {
      margin-top: 5px;
    }
    .slider_vertical span {
      float: left;
      margin-right: 3.5%;
    }
    .slider_vertical span:last-child,
    .slider_vertical span.last-child {
      margin-right: 0;
    }
    .has_labels.slider {
      margin-bottom: 10px;
    }
    .ui-slider ol.slider_labels {
      margin-top: 15px;
      width: 100%;
      margin-left: 1%;
      position: absolute;
    }
    .slider ol.slider_labels li:last-child,
    .slider ol.slider_labels li.last-child {
      margin-right: 0!important;
    }
    .ui-slider ol.slider_labels li {
      font-weight: 700;
      font-size: 11px;
      float: left;
      display: block;
      width: 15px;
      margin-left: -15px;
      text-align: center;
    }
    /* Buttons */
    button,
    .button {
      padding: 5px;
      margin-right: 5px;
      margin-bottom: 5px;
      float: left;
      margin-bottom: 0;
      line-height: 22px;
      position: relative;
      text-align: center;
      vertical-align: middle;
      z-index: 2;
      color: #fff;
      font-size: 12px;
      font-family: sans-serif;
      letter-spacing: 0;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      overflow: hidden;
    }
    button.full,
    .button.full {
      width: 100%;
    }
    button.narrow,
    .button.narrow,
    .narrow_buttons button,
    .narrow_buttons .button {
      width: 30px;
    }
    button.regular,
    .button.regular,
    .regular_buttons button,
    .regular_buttons .button {
      width: 80px;
    }
    button.wide,
    .button.wide,
    .wide_buttons button,
    .wide_buttons .button {
      width: 120px;
    }
    button.send_right,
    .button.send_right,
    .send_right > button,
    .send_right > .button {
      float: right;
      margin-left: 5px;
      margin-right: 0;
    }
    button.button_down,
    .button.button_down {
      top: 1px;
    }
    button:hover,
    .button:hover {
      color: #fff;
    }
    p > button,
    p > .button {
      margin-bottom: 5px;
    }
    button.full_width,
    .button.full_width {
      width: 100%;
      text-align: center;
      float: none;
    }
    button.full_width.left,
    .button.full_width.left {
      text-align: left;
    }
    button.full_width.has_icon span,
    .button.full_width.has_icon span {
      margin-left: -10px;
    }
    button .ui-icon,
    .button .ui-icon {
      margin: 3px;
      float: left;
    }
    button img,
    .button img {
      display: block;
      float: left;
      margin: -1px;
    }
    button.div_icon span,
    button.img_icon span,
    .button.div_icon span,
    .button.img_icon span {
      padding-left: 5px;
      padding-right: 5px;
    }
    button.text_only,
    .button.text_only {
      padding-right: 5px;
      padding-left: 5px;
    }
    button.tiny,
    .button.tiny {
      line-height: 10px;
      padding: 5px 3px 2px !important;
      font-size: 10px;
    }
    button.tiny.text_only,
    .button.tiny.text_only {
      padding-right: 5px;
      padding-left: 5px;
    }
    button.tiny .ui-icon,
    .button.tiny .ui-icon {
      margin: -5px -3px -1px;
    }
    button.tiny img,
    .button.tiny img {
      display: block;
      margin: -7px -6px;
    }
    button.small,
    .button.small {
      line-height: 18px;
    }
    button.small .ui-icon,
    .button.small .ui-icon {
      margin: 1px;
    }
    button.small img,
    .button.small img {
      display: block;
      margin: -3px;
    }
    button.large,
    .button.large {
      line-height: 36px;
    }
    button.large .ui-icon,
    .button.large .ui-icon {
      margin: 10px;
    }
    button.large img,
    .button.large img {
      display: block;
      margin: 7px 7px 5px;
    }
    button.large span,
    .button.large span {
      padding-right: 10px;
    }
    button.large.text_only span,
    .button.large.text_only span {
      padding-right: 10px;
      padding-left: 10px;
    }
    button.large_icon,
    .button.large_icon {
      line-height: 36px;
    }
    button.large_icon > img,
    .button.large_icon > img {
      margin: 3px;
    }
    button.large_icon > .ui-icon,
    .button.large_icon > .ui-icon {
      margin: 13px;
    }
    button.large_icon span,
    .button.large_icon span {
      padding-left: 10px;
    }
    button.large_icon.icon_top .ui-icon,
    .button.large_icon.icon_top .ui-icon {
      float: none;
      margin: 17px auto 5px;
    }
    button.large_icon.icon_top img,
    .button.large_icon.icon_top img {
      display: block;
      float: none;
      margin: 7px auto -5px;
      text-align: center;
    }
    button.large_icon.icon_only .ui-icon,
    .button.large_icon.icon_only .ui-icon {
      margin: 13px;
    }
    button.large_icon span,
    .button.large_icon span {
      padding-right: 10px;
      line-height: 40px;
    }
    button.large_icon.icon_top span,
    .button.large_icon.icon_top span {
      line-height: 10px;
    }
    .buttonset {
      border-radius: 3px;
      float: left;
      clear: both;
    }
    .buttonset button,
    .buttonset .button {
      float: left;
      margin: 0 -1px 2px 0;
      border-radius: 0;
    }
    .buttonset button:first-child,
    .buttonset .button:first-child {
      border-radius: 3px 0 0 3px;
    }
    .buttonset button:last-child,
    .buttonset .button:last-child {
      border-radius: 0 3px 3px 0;
    }
    button.inflate,
    .button.inflate {
      transition: transform 0.2s ease-in-out;
    }
    button.inflate:hover,
    .button.inflate:hover {
      z-index: 99;
      transform: scale(1.2);
    }
    /*-----End of Form Elements -------*/
    /*--------------------------------
    Tab Boxes
    --------------------------------*/
    .tabs ul.tab_header {
      margin-top: 0;
      margin-bottom: 0;
      padding: 0;
      border-width: 1px;
      height: 32px;
    }
    .tabs ul.tab_header li {
      display: block;
      float: left;
      margin: 0;
      margin-bottom: -1px;
      padding: 0;
      border: 0;
      background: none;
      cursor: pointer;
      position: static;
      filter: none;
    }
    .tabs .ui-tabs-panel {
      overflow: hidden;
    }
    .box.tabs ul.tab_header li a {
      display: block;
      margin: 4px 0 0 5px;
      line-height: 28px;
      padding: 0 15px;
      text-shadow: 0 1px 0 #fff;
      color: #555;
      font-weight: 400;
      background-color: #D0D6DA;
      filter: none;
      border-bottom: 1px solid #AAA;
    }
    .box.tabs.closed ul.tab_header li a {
      line-height: 25px;
      margin-bottom: 3px;
      border: 0;
    }
    .tabs ul.tab_header li a span {
      color: #333;
      font: bold 10px sans-serif;
    }
    .tabs ul.tab_header li a:hover {
      color: #222;
      cursor: pointer;
    }
    .tabs ul.tab_header li.ui-tabs-selected a {
      background: #fff;
      filter: none;
      border-color: #fff;
      color: #333;
      text-shadow: none;
    }
    .tabs ul.tab_header li.ui-tabs-selected a {
      cursor: default;
    }
    .tabs ul {
      margin-bottom: -1px;
    }
    .side_tabs .block {
      margin-left: 150px;
      position: relative;
      border-left: 0;
      min-height: 193px;
    }
    .side_tabs .block.ui-tabs-hide {
      min-height: 0;
    }
    .tabs ul.tab_sider {
      margin-top: 0;
      margin-bottom: 0;
      padding: 0;
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 150px;
      filter: none;
      border: 0;
      overflow: hidden;
      border-color: #333;
    }
    .tabs ul.tab_sider li {
      display: block;
      margin: 5px 0 0 5px;
      padding: 0;
      width: 100%;
      border: 0;
      background: none;
      cursor: pointer;
      zoom: 1;
    }
    .box.tabs ul.tab_sider li a {
      display: block;
      line-height: 32px;
      margin: 0;
      padding: 0;
      text-shadow: 0 1px 0 #fff;
      text-indent: 10px;
      width: 100%;
      color: #555;
      font-weight: 400;
      background-color: #D0D6DA;
      zoom: 1;
    }
    .tabs ul.tab_sider li a:hover {
      color: #222;
    }
    .tabs ul.tab_sider li.ui-tabs-selected a {
      background: #fff;
      border-color: #fff;
      color: #333;
      text-shadow: none;
      padding: 0;
      box-shadow: inset 0 0 2px #fff;
    }
    /*-----End of Tabs -------*/
    /*--------------------------------
    Accordion
    --------------------------------*/
    ul.content_accordion {
      list-style: none;
      padding: 0!important;
      width: 100%;
      margin: 0 0 -1px;
    }
    .content_accordion h3.bar {
      background-color: #dfe2e4;
      display: block;
      *display: inline-block;
      margin: 0;
      line-height: 30px;
      font-family: sans-serif;
      padding: 0 10px;
      font-size: 13px;
      font-weight: 400;
      color: #333;
      text-shadow: 0 1px 0 #fff;
      border-bottom: 1px solid #959BA2;
      border-top: 0 solid #fff;
      border-right: 1px solid #aaa;
      border-left: 1px solid #aaa;
    }
    .block .content_accordion li:first-child h3.bar,
    .no_titlebar .content_accordion li:first-child h3.bar {
      border-top: 1px solid #aaa;
    }
    .full_size > .box .block.content_accordion li:first-child h3.bar {
      border-top: none;
    }
    .full_size > .box .block.content_accordion .content {
      border-left: none;
      border-right: none;
    }
    .full_size > .box .block.content_accordion li:last-child .content {
      border-bottom: none;
    }
    .full_size .content_accordion h3.bar {
      border-left: none;
      border-right: none;
    }
    .content_accordion {
      border: 0!important;
    }
    .content_accordion .content {
      padding: 0px;
      border-top: none;
      border-left: 1px solid #aaa;
      border-right: 1px solid #aaa;
      border-bottom: 1px solid #aaa;
      background-color: #fff;
    }
    .content_accordion li:last-child .content {
      border-bottom: 1px solid #aaa;
    }
    ul.content_accordion li {
      position: relative;
      padding: 0;
      margin: 0;
      margin-top: 0!important;
      margin-bottom: 0!important;
      width: 100%;
      display: block;
      border: none;
      border-bottom: 0!important;
    }
    ul.content_accordion li a.handle {
      background: url(../../images/interface/grabber-trans.png) no-repeat;
      line-height: 22px;
      height: 22px;
      width: 22px;
      position: absolute;
      right: 6px;
      top: 6px;
      z-index: 10;
      cursor: move;
      zoom: 1;
    }
    ul.content_accordion.no_rearrange li a.handle {
      display: none;
    }
    /*-----End of Accordion -------*/
    /*--------------------------------
    Dialog
    --------------------------------*/
    .no_dialog_titlebar.ui-dialog .ui-dialog-titlebar {
      display: none;
    }
    .no_dialog_titlebar .tab_header {
      margin-top: 0!important;
      border-top: 0!important;
    }
    .dialog_content .section {
      padding: 15px 20px;
    }
    .dialog_content .block {
      overflow: visible;
    }
    .dialog_content input {
      position: relative;
      z-index: 9999;
    }
    /*-----End of Dialog -------*/
    /*--------------------------------
        Regular Tables
    --------------------------------*/
    table.static {
      width: 100%;
      margin-bottom: 0!important;
      margin-top: 0!important;
    }
    table.static thead {
      background: #D0D6DA;
      border-bottom: 1px solid #aaa;
    }
    table.static thead tr th {
      border-left: none;
      border-right: none;
      line-height: 30px;
      padding: 0 10px;
      text-align: left;
      color: #333;
      font-weight: 400;
      text-shadow: 0 1px 0 #fff;
    }
    table.static tbody tr td {
      line-height: 25px;
      padding: 0 10px;
      border: 0 solid #999;
    }
    table.static tbody tr td {
      border-bottom: 1px solid #E1E5E7;
    }
    table.static tbody tr:last-child td {
      border-bottom: 0;
    }
    table.static tbody tr.even td {
      background-color: #EDF1F3;
      border-bottom: 1px solid #D8DCDE;
    }
    table.static tbody tr td input,
    table.static tbody tr td button {
      margin: 10px 0;
    }
    /*--------------------------------
        Wizard
    --------------------------------*/
    .wizard {
      position: relative;
    }
    .wizard_content .step {
      display: none;
    }
    .wizard_content {
      display: block;
    }
    .wizard_steps {
      display: block;
    }
    .wizard_progressbar {
      display: block;
      float: right;
      margin: 11px 7px 0 0 !important;
      width: 223px;
      z-index: 9999;
      border-color: rgba(0, 0, 0, 0.5);
      box-shadow: 0 0 2px rgba(0, 0, 0, 0.5) inset;
    }
    .ui-progressbar-value {
      -o-transition: width .1s ease;
    }
    .wizard .wizard_steps ul {
      width: 100%;
      border-right: 0!important;
      border-left: 0!important;
      border-top: 1px solid rgba(0, 0, 0, 0.5) !important;
      border-bottom: 1px solid rgba(0, 0, 0, 0.5) !important;
      background: #4C5766;
      margin-top: 0;
      margin-bottom: 0;
    }
    .wizard .wizard_steps ul li {
      min-width: 150px;
      display: inline-block;
      float: left;
      list-style: none;
      border-right: 1px solid rgba(0, 0, 0, 0.5);
    }
    .wizard .wizard_steps ul li.current {
      background: #fff;
      border-left: 1px solid #BAC5CC!important;
      border-bottom: 1px solid #BAC5CC!important;
      border-top: 1px solid #fff!important;
      margin: -1px 0;
      border-right: 0;
      padding-right: 1px;
    }
    .wizard .wizard_steps ul li.current a {
      border-bottom: 1px solid rgba(255, 255, 255, 0.5);
      border-right: 1px solid rgba(255, 255, 255, 0.5);
      color: #000;
      text-shadow: 0 1px 0 #fff;
    }
    .wizard .wizard_steps ul li:last-child,
    .wizard .wizard_steps ul li:last-child a {
      border-right-width: 0;
    }
    .wizard .wizard_steps ul li a {
      font-weight: 400;
      color: #fff;
      display: block;
      padding: 8px 10px;
      border-right: 1px solid rgba(255, 255, 255, 0.2);
      text-shadow: 0 1px 0 #000;
    }
    .wizard .wizard_steps ul li a span {
      display: inline-block;
      float: left;
      font-size: 12px;
    }
    .wizard .wizard_steps ul li a small {
      font-size: 10px;
      color: #ddd;
      margin: 5px 0 0 12px;
      display: inline-block;
      float: left;
      clear: both;
    }
    .wizard .wizard_steps ul li.current a small {
      color: #333;
    }
    /*--------------------------------
    File Browser
    --------------------------------*/
    #file_tree ul.jqueryFileTree li {
      padding: 0 0 5px 25px;
      background-position: 0 8px;
    }
    #file_tree ul.jqueryFileTree li.directory a {
      font-weight: 400;
      line-height: 30px;
      margin-bottom: 0;
    }
    /*--------------------------------
        Isotope Tiles
    --------------------------------*/
    .isotope_holder ul li {
      list-style: none;
      float: left;
    }
    .isotope_holder ul li > * {
      overflow: hidden;
    }
    /* Gallery */
    .gallery {
      padding: 25px 0 15px 24px;
      margin: 0;
      list-style: none;
    }
    .gallery li {
      list-style: none;
      float: left;
      padding: 0;
      margin: 0 9px 9px -1px;
      position: relative;
      border-radius: 3px;
      box-shadow: 0 2px 0 1px rgba(0, 0, 0, 0.06), 0 1px 0 rgba(255, 255, 255, 0.2) inset;
    }
    .gallery li a {
      padding: 5px;
      display: block;
      overflow: auto;
      text-align: center;
      border: 1px solid #959BA2;
      border-radius: 3px;
    }
    .gallery li a:hover {
      background-color: #fff;
    }
    .gallery li a img {
      display: block;
      margin: 2px auto 3px;
      padding: 0;
      border: 1px solid #fff;
    }
    .gallery li a span.name {
      color: #666;
      font-size: 12px;
      text-align: center;
      margin: 0 2px;
      display: block;
      line-height: 17px;
    }
    .gallery li a span.size {
      display: block;
      color: #999;
      font-size: 10px;
      line-height: 15px;
      margin-bottom: 5px;
    }
    .gallery li a span.update {
      display: none;
    }
    .gallery li .delete {
      display: none;
      cursor: pointer;
    }
    .gallery li:hover .delete {
      position: absolute;
      bottom: 5px;
      right: 5px;
      opacity: .5;
      display: block;
    }
    .gallery li:hover .delete:hover {
      opacity: 1;
    }
    /*
    .gallery:hover li {
        opacity:.5!important;
    }

    .gallery:hover li:hover {
        opacity:1!important;
    }
    */
    .gallery li a.features .starred {
      background: url(../../images/content/features/yellow_star.png) no-repeat;
      display: block;
      height: 35px;
      width: 35px;
      position: absolute;
      right: 0;
      top: 1px;
    }
    .gallery li a.features .starred.blue {
      background: url(../../images/content/features/blue_star.png) no-repeat;
    }
    .gallery li a.features .starred.green {
      background: url(../../images/content/features/green_star.png) no-repeat;
    }
    .gallery li a span.update {
      display: none;
    }
    /* Feature Tiles */
    .feature_tiles {
      padding: 15px 0 5px 14px;
    }
    .feature_tiles li a {
      width: 105px;
      height: 80px;
    }
    .feature_tiles li a img {
      border: 0;
    }
    /* Contact Tile */
    .contact_tiles {
      margin: 10px 4px 0;
    }
    .contact_tiles li {
      width: 207px;
      margin: 0 5px 10px;
    }
    .contact_tiles .box {
      margin: 0;
    }
    .contact_tiles p.phone,
    .contact_tiles p.email {
      line-height: 35px!important;
      text-align: center;
      font-weight: 700;
    }
    .media_tiles li {
      width: 180px;
    }
    .media_tiles li img {
      float: left;
      margin-right: 10px !important;
    }
    .media_tiles li h3 {
      text-align: left;
      margin-top: 10px;
    }
    .media_tiles li p {
      text-align: left;
      margin-bottom: 0;
    }
    /* tiles */
    .picture_tiles {
      margin-bottom: 0;
    }
    .picture_tiles > li {
      list-style: none;
      float: left;
      margin: 0px 0 10px 5px;
      position: relative;
      transition: opacity 0.2s ease-in-out;
    }
    .picture_tiles > li > a {
      border-radius: 3px;
      overflow: hidden;
      display: block;
      border: 1px solid #000;
    }
    .picture_tiles:hover > li {
      opacity: 0.5;
    }
    .picture_tiles:hover > li:hover {
      opacity: 1;
    }
    /*--------------------------------
        Calendar
    --------------------------------*/
    .fc table {
      margin-bottom: 0;
      margin-top: 0;
    }
    .fc thead tr th {
      line-height: 30px;
    }
    .fc .fc-agenda-divider {
      background: #333;
      border-color: #000;
    }
    .fc .fc-agenda-slots tr th {
      border-color: #959BA2;
      color: #555;
      text-shadow: 0 1px 0 #FFF;
    }
    .fc .ui-state-highlight,
    .fc .ui-widget-content .ui-state-highlight,
    .fc .ui-widget-header .ui-state-highlight {
      background-color: #E6ECEF;
    }
    .fc .fc-event {
      padding: 5px;
      text-shadow: 0 1px 0 #000;
      margin: 2px 0 1px;
      border-radius: 3px;
    }
    .fc .fc-event.google {
      border: 1px solid #959BA2;
    }
    .fc .fc-event a,
    .fc-event-skin,
    .fc-event-vert .fc-event-bg {
      background: none;
    }
    .fc .fc-event .fc-event-inner {
      background: none;
      border: none;
    }
    ul#calendar_drag_list li {
      padding: 0;
    }
    ul#calendar_drag_list li a {
      color: #fff;
      padding: 5px;
      font-size: 10px;
      line-height: 10px;
      text-shadow: 0 1px 0 #000;
      display: block;
      cursor: move;
    }
    /*--------------------------------
    Flot Graph
    --------------------------------*/
    .flot {
      width: 100%;
      margin: 0 0 5px;
      height: 300px;
      overflow: hidden;
    }
    /*--------------------------------
    Login Box
    --------------------------------*/
    #login_box {
      width: 500px;
    }
    #login_box .main_container {
      background-color: transparent;
    }
    #login_box .main_container .block {
      border-width: none;
    }
    a#login_logo {
      background: transparent url(../../images/interface/adminica_logo_black-trans.png) 0 -15px no-repeat;
      position: relative;
      display: block;
      height: 67px;
      width: 253px;
      margin-top: 1px;
      float: left;
    }
    a#login_logo span {
      visibility: hidden;
    }
    .slider_unlock {
      height: 32px;
      box-sizing: border-box;
      border: 0;
      background: rgba(0, 0, 0, 0.05);
      box-shadow: inset 0 0 2px 0 #bbb;
    }
    .slider_unlock .ui-slider-range {
      margin: 0;
      height: 32px;
    }
    .slider_unlock .ui-slider-handle {
      background: #fff;
      height: 32px;
      width: 32px;
      margin-left: 0;
      top: 0;
      background: transparent url(../../images/interface/unlock_slider.png) !important;
    }
    .slider_unlock .unlock_message {
      margin: 0;
      text-align: center;
      line-height: 32px;
      font-size: 14px;
    }
    /*--------------------------------
    Info Boxes
    --------------------------------*/
    .info_slider_holder {
      overflow: hidden;
      margin-bottom: -1px;
    }
    .all_open .block:last-child .info_slider_holder {
      margin-bottom: -1px;
    }
    ul.info_slider {
      height: 152px;
      overflow: hidden;
      margin-top: -1px;
      margin-bottom: 1px;
    }
    .info_blocks {
      margin: 0;
    }
    .info_slider li,
    .info_blocks li {
      list-style: none;
      float: left;
      display: inline-block;
    }
    .info_slider li {
      width: 144px;
    }
    ul.info_blocks {
      margin: 0;
    }
    .info_blocks li {
      width: 20%;
      min-width: 140px;
      max-width: 200px;
    }
    .draggable_scroll ul.info_slider {
      cursor: move;
    }
    .info_box {
      width: 100%;
      position: relative;
    }
    .info_box > label {
      position: relative;
      display: block;
      line-height: 15px;
      min-height: 22px;
      padding: 6px 0 4px;
      text-align: center;
      font-size: 13px;
      color: #666;
      border-top: 1px solid #ccc;
      border-bottom: 0 solid #ccc;
      border-left: 1px dashed #bbb;
      background: #f5f5f5;
    }
    .info_blocks .info_box > label {
      border-bottom-width: 1px;
    }
    .info_box > label > .comment {
      position: absolute;
      right: 2px;
      top: 0;
      width: 20px;
      height: 20px;
      margin: 0;
    }
    .info_box > .value_tag {
      position: absolute;
      top: 7px;
      background: none;
      border: none;
      font-size: 12px;
      width: 100%;
    }
    .info_box > .value_tag > span {
      min-width: 50px;
      padding: 2px 5px 1px;
      margin: 0 auto;
      border: 1px solid #959BA2;
      background: #fff;
      font-size: 11px;
      font-weight: 700;
    }
    .info_box > div {
      text-align: center;
      color: #333;
      font-size: 16px;
    }
    .info_box > div > small {
      font-size: 12px;
      color: #666;
    }
    .info_box > div.split {
      border-bottom: 1px solid #ddd;
      margin-bottom: -1px;
    }
    .info_box > div.split:last-of-type {
      border-bottom: 0;
    }
    .info_box > div.split.one {
      height: 120px;
      line-height: 120px;
    }
    .info_box > div.split.two {
      height: 60px;
      line-height: 60px;
    }
    .info_box > div.split.three {
      height: 40px;
      line-height: 40px;
    }
    .info_box > div > div {
      height: 100%;
    }
    .info_box > div * {
      vertical-align: middle!important;
    }
    .info_box > div img {
      display: inline;
    }
    .info_box > div a:hover {
      opacity: .85;
    }
    .big_letter {
      font-size: 45px;
      letter-spacing: -2px;
      font-weight: 700;
      text-align: center;
      line-height: 130px;
    }
    .big_letter .small {
      font-size: 16px;
      font-weight: 400;
      color: #666;
      margin-right: -5px;
      margin-left: 5px;
      letter-spacing: 0;
    }
    .info_box .green {
      color: #3FC846;
    }
    .info_box .orange {
      color: #F9892F;
    }
    .info_box .red {
      color: #F51204;
    }
    .info_box .blue {
      color: #0764CB;
    }
    .info_box > div > label {
      display: block;
      font-size: 12px;
      margin: 5px 0 2px 11px;
      text-align: left;
      line-height: 20px;
    }
    .chart > span > canvas {
      vertical-align: middle!important;
      margin-top: 8px;
    }
    .spark_inline canvas {
      vertical-align: middle!important;
    }
    .spark_inline {
      margin-right: 10px;
    }
    .spark_inline.left {
      margin-right: 0px;
      margin-left: 10px;
    }
    .chart_dates {
      padding: 10px;
      border-top: 1px solid #000;
    }
    .chart_dates > div {
      float: left;
      display: inline-block;
      width: 50%;
    }
    .chart_dates label {
      float: left;
      display: inline-block;
      color: #fff;
      margin-right: 10px;
      line-height: 22px;
      font-weight: 700;
    }
    .chart_dates input {
      float: left;
      display: inline-block;
      width: 73px;
      padding: 0;
      text-indent: 2px;
      height: 20px;
      border-color: #000;
    }
    .chart_dates > div.date_to label {
      margin: 0 0 0 20px;
    }
    .chart_dates > div.date_to input {
      float: right;
    }
    .chart_dates input:focus {
      border-color: #419DF9;
    }
    .chart_toggles .scrollbar-container {
      right: -8px;
    }
    .chart_toggles div ul li label {
      line-height: 20px;
      padding: 10px;
      cursor: pointer;
      border-right: 0;
    }
    .chart_controls div ul li:last-child label {
      border-bottom: none;
    }
    .chart_holder {
      position: relative;
      width: auto;
      height: 100%;
      margin-left: 201px;
      border-left: 1px solid #ccc;
    }
    .highcharts-tooltip {
      color: red!important;
    }
    /*--------------------------------
    Corners, Shadows & Highlights
    --------------------------------*/
    .text_shadow {
      text-shadow: 0 1px 1px #000;
    }
    .text_highlight {
      text-shadow: 0 1px 0 #fff;
    }
    .round_all,
    .box.no_titlebar .block,
    button,
    .dark_box,
    .side_accordion,
    .side_links,
    .box h2.box_head.round_all,
    .sidebar,
    div.main_container .box,
    .alert,
    .indent,
    div.main_container .gallery li a,
    .ui-slider-range,
    .ui-multiselect,
    .single_datatable .dataTables_filter input,
    .ui-multiselect input.search,
    .breadcrumb,
    ul.breadcrumb,
    #login_box,
    a.show_all_tabs,
    .tabs .tab_header.round_all,
    body .box .ui-multiselect input.search,
    .info_box > .value_tag > span,
    .indented_button_bar,
    .toggle_container,
    .box.tabs.closed ul.tab_header li a,
    ul#calendar_drag_list li a,
    .stackbar ul ul li.current,
    .content_accordion li:first-child:last-child h3.bar {
      border-radius: 3px;
    }
    .flat_area h2,
    body round_all_small,
    .box .block input,
    .box .block textarea,
    #login_box .LV_validation_message,
    .dataTables_wrapper .ui-widget-header select,
    .slider_unlock,
    .slider_unlock.ui-slider-horizontal .ui-slider-range,
    .slider_unlock.ui-slider-horizontal .ui-slider-handle {
      border-radius: 2px;
    }
    .round_bottom,
    .box .block,
    .side_accordion > li:last-child > a,
    .side_accordion > li:last-child,
    .side_links li:last-child,
    .side_links li:last-child a,
    li:last-child ul.drawer,
    li:last-child ul.drawer li,
    li:last-child ul.drawer li:last-child a,
    .button_bar,
    .dropdown_menu ul li ul.dropdown li:last-child a,
    .dropdown_menu ul li ul.dropdown,
    .dropdown_menu ul li ul.dropdown li:last-child ul.drawer li:last-child,
    .dropdown_menu ul li ul.dropdown li:last-child ul.drawer li:last-child a,
    li:last-child .content_accordion .content,
    .content_accordion li:last-child .content,
    span.form_tag,
    .content_accordion li:last-child h3.bar,
    .dataTables_wrapper .ui-corner-bl,
    body .dropdown_menu ul li.current:last-child a,
    .all_open .block:last-child,
    .slider_title {
      border-radius: 0;
      border-bottom-right-radius: 3px;
      border-bottom-left-radius: 3px;
    }
    .round_top,
    .side_accordion li:first-child a,
    .side_accordion li:first-child,
    .side_links li:first-child,
    .side_links li:first-child a,
    h2.box_head,
    .tabs .tab_header,
    .tabs ul.tab_header li a,
    .block .content_accordion li:first-child h3.bar,
    .box.no_titlebar li:first-child h3,
    .dataTables_wrapper .ui-corner-tl,
    .ui-datepicker .ui-datepicker-header,
    .ui-dialog .ui-dialog-titlebar,
    .content_accordion li:first-child h3.bar.ui-state-active {
      border-radius: 0;
      border-top-left-radius: 3px;
      border-top-right-radius: 3px;
    }
    .round_left,
    div.main_container .tabs ul.tab_sider,
    div.main_container .tabs ul.tab_sider li a,
    .dataTables_wrapper .dataTables_paginate span.first,
    ul.breadcrumb > li:first-child {
      border-radius: 0;
      border-top-left-radius: 3px;
      border-bottom-left-radius: 3px;
    }
    .round_right,
    .box .block.tab_sider,
    .dataTables_wrapper .dataTables_paginate span.last,
    ul.breadcrumb > li:last-child {
      border-radius: 0;
      border-top-right-radius: 3px;
      border-bottom-right-radius: 3px;
    }
    .round_ynnn,
    .dropdown_menu > ul > li:first-child a,
    .dropdown_menu > ul > li:first-child,
    .fc thead tr th.fc-first,
    .ui-multiselect .selected .ui-widget-header {
      border-radius: 0;
      border-top-left-radius: 3px;
    }
    .round_nnyn,
    .dropdown_menu ul li:last-child a,
    .dropdown_menu ul li:last-child {
      border-radius: 0;
      border-bottom-right-radius: 3px;
    }
    .round_nynn,
    .fc thead tr th.fc-last,
    .ui-multiselect .available .ui-widget-header {
      border-radius: 0;
      border-top-right-radius: 3px;
    }
    .round_none,
    .content_accordion li h3.bar.ui-state-active,
    .all_open .block {
      border-radius: 0;
    }
    /*--------------------------------
        Utilities
    --------------------------------*/
    .display_none {
      display: none !important;
    }
    .display_block {
      display: block;
    }
    .hidden {
      opacity: 0;
    }
    .send_left {
      float: left;
    }
    .send_right {
      float: right;
    }
    .no_border {
      border: none!important;
    }
    .no_border_top {
      border-top: none!important;
      margin-top: 0 !important;
    }
    .no_border_right {
      border-right: none!important;
      margin-right: 0 !important;
    }
    .no_margin_top {
      margin-top: 0!important;
    }
    .no_margin {
      margin: 0!important;
    }
    .no_margin_bottom {
      margin-bottom: 0!important;
    }
    .no_padding {
      padding: 0!important;
    }
    .padding_top_10 {
      padding-top: 10px;
    }
    .margin_bottom_10 {
      margin-bottom: 10px;
    }
    .margin_bottom_15 {
      margin-bottom: 15px;
    }
    .circle {
      border-radius: 1000px !important;
    }
    /*----End of Utilities -----*//*--------------------------------
    iPhone and iPad formatting
    --------------------------------*/
    /*  iPad Portrait and Landscape */
    @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
      #template_options {
        position: relative!important;
      }
      .sidebar div.cog {
        line-height: 40px!important;
        width: 40px!important;
        right: -40px !important;
      }
    }
    /*  iPhone Landscape */
    @media screen and (min-width: 321px) and (max-width: 480px) {
      #wrapper {
        min-width: 300px;
      }
      a.logo {
        display: none;
        float: none!important;
        margin: auto !important;
      }
      .dropdown_menu {
        margin: 0;
      }
      .dropdown_menu ul {
        display: none;
      }
      #mobile_nav {
        display: block;
      }
      #topbar .user_box {
        margin: 10px auto 0;
        float: none;
      }
      body div.main_container {
        margin: 10px 0 10px 1%!important;
        padding: 20px 2% 5px!important;
        width: 94% !important;
      }
      .grid_100,
      .grid_1,
      .grid_2,
      .grid_3,
      .grid_4,
      .grid_5,
      .grid_6,
      .grid_7,
      .grid_8,
      .grid_9,
      .grid_10,
      .grid_11,
      .grid_12,
      .grid_13,
      .grid_14,
      .grid_15,
      .grid_16,
      .col_100,
      .col_80,
      .col_70,
      .col_30,
      .col_50,
      .col_33,
      .col_66,
      .col_25,
      .col_75,
      .col_60,
      .col_40,
      .col_20 {
        width: 100%!important;
        margin-left: 0!important;
        margin-right: 0!important;
      }
      body div.full_size {
        padding: none !important;
      }
      #template_options {
        position: relative !important;
      }
      div.main_container .box,
      div.main_container .flat_area {
        width: 100%!important;
        margin-left: 0!important;
        margin-right: 0 !important;
      }
      .sidebar,
      .stackbar {
        display: none !important;
      }
      #topbar {
        display: block !important;
      }
      #template_options h3 {
        float: none!important;
        display: block!important;
        clear: both !important;
      }
      #template_options div {
        display: block;
      }
      div.full_size {
        padding: 0 !important;
      }
      div.full_size .box {
        margin: -20px -2% -5px !important;
        padding: 0!important;
        width: 104% !important;
      }
      body {
        padding-bottom: 0 !important;
      }
      #loading_overlay .loading_message {
        margin-left: -76px;
      }
    }
    /*  iPhone Portrait */
    @media screen and (max-width: 320px) {
      #wrapper {
        min-width: 100px;
      }
      a.logo {
        display: none;
        float: none!important;
        margin: auto !important;
      }
      .dropdown_menu {
        margin: 0;
      }
      .dropdown_menu ul {
        display: none;
      }
      #mobile_nav {
        display: block;
      }
      #topbar .user_box {
        margin: 10px auto 0;
        float: none;
      }
      body div.main_container {
        margin: 10px 1%!important;
        padding: 20px 2% 5px!important;
        width: 94% !important;
      }
      .grid_100,
      .grid_1,
      .grid_2,
      .grid_3,
      .grid_4,
      .grid_5,
      .grid_6,
      .grid_7,
      .grid_8,
      .grid_9,
      .grid_10,
      .grid_11,
      .grid_12,
      .grid_13,
      .grid_14,
      .grid_15,
      .grid_16,
      .col_100,
      .col_80,
      .col_70,
      .col_30,
      .col_50,
      .col_33,
      .col_66,
      .col_25,
      .col_75,
      .col_60,
      .col_40,
      .col_20 {
        width: 100%!important;
        margin-left: 0!important;
        margin-right: 0!important;
      }
      body .dropdown_menu ul li.current:first-child a {
        border-left-width: 1px !important;
      }
      #template_options {
        position: relative !important;
      }
      #template_options h3 {
        float: none!important;
        display: block!important;
        clear: both !important;
      }
      #template_options div {
        display: block;
      }
      .sidebar,
      .stackbar {
        display: none !important;
      }
      #topbar {
        display: block !important;
      }
      div.main_container .box,
      div.main_container .flat_area {
        width: 100% !important;
      }
      div.full_size {
        padding: 0 !important;
      }
      div.full_size .box {
        margin: -20px -2% -5px !important;
        padding: 0!important;
        width: 104% !important;
      }
      body {
        padding-bottom: 0 !important;
      }
      #loading_overlay .loading_message {
        margin-left: -76px;
      }
    }
    /* Coloured Header Gradients, eg. Sortable Boxes, Tab Boxes, Date-picker, etc. */
    .grad_skin,
    .grad_black,
    button,
    .button,
    .alert,
    .calendar_grad,
    .dark_box,
    .dropdown_menu > ul > li.current > a,
    .box_head,
    .tab_header,
    .tab_sider,
    #login_box #bar,
    .user_box,
    #search_side,
    .wizard .wizard_steps ul,
    .dataTables_wrapper .ui-widget-header,
    .ui-button .ui-state-active,
    .ui-widget-header .ui-state-active,
    .ui-buttonset .ui-button.ui-state-active,
    .ui-multiselect .ui-widget-header,
    .ui-slider .ui-slider-range,
    .slider-content .selected .title,
    .fc-header .fc-state-active,
    .fc-header .ui-state-active,
    .ui-progressbar .ui-progressbar-value,
    .stackbar.stack_view > ul > li > a > span,
    div.stackbar.stack_view > ul > li > a > span::before {
      background-color: #4c5766;
      border-color: #313841 #313841 #000 #313841;
      color: #fff;
      text-shadow: 0 1px 0 #000;
      background-image: linear-gradient(top, #4c5766, #313841);
    }
    .grad_black_reverse,
    button:hover,
    .button:hover {
      background-color: #313841;
      background-image: linear-gradient(top, #313841, #4c5766);
    }
    /* Grey Header Gradients eg. Nav, Sidebar, Accordion, etc. */
    .grad_grey,
    button.light,
    .button.light,
    .alert_light,
    .shade,
    .ui-multiselect li,
    .side_accordion > li,
    .dropdown_menu > ul > li,
    .dropdown_menu > ul > li > ul.dropdown li,
    .breadcrumb,
    .toggle_all,
    .content_accordion h3.bar,
    .dataTables_scrollHead,
    .dataTables_paginate span.fg-button,
    .list_slider .slider-nav,
    .slider-content .title,
    .list_slider .slide-up,
    .list_slider .slide-down,
    .side_links li a,
    .tabs ul.tab_header li a,
    .tabs ul.tab_sider li a,
    .fc .fc-agenda-slots tr th,
    table.static thead tr th,
    .wizard .wizard_steps ul li.current,
    .alert_light,
    div.main_container .box.light h2.box_head,
    div.main_container .box.white h2.box_head,
    .ui-datepicker-header,
    .ui-button,
    .fc-button,
    .button_bar,
    .slider_title,
    .ui-dialog-titlebar,
    ul.breadcrumb,
    .toggle_all,
    .info_box > .value_tag > span {
      color: #333;
      border-color: #bac5cc;
      text-shadow: 0 1px 0 #fff;
      background-color: #E6ECEF;
      background-image: linear-gradient(top, #e6ecef, #d0d6da);
    }
    .grad_grey_reverse,
    button.light:hover,
    .button.light:hover,
    .alert_light:hover {
      background-color: #D0D6DA;
      background-image: linear-gradient(top, #d0d6da, #e6ecef);
    }
    .grad_grey_light,
    .el-finder-toolbar ul,
    .el-finder-statusbar,
    .dropdown_menu ul li:hover,
    .dropdown_menu ul li ul.dropdown li:hover,
    .side_accordion > li:hover,
    div.stackbar > ul > li,
    div.stackbar ul ul li.current {
      background-color: #E6ECEF;
      border-color: #959BA2;
      text-shadow: 0 1px 0 #fff;
      background-color: #eee;
      background-image: linear-gradient(top, #e6ecef, #d9e1e5);
    }
    .grad_grey_light_reverse {
      background-color: #d9e1e5;
      background-image: linear-gradient(top, #d9e1e5, #e6ecef);
    }
    .grad_indented,
    .indented_area,
    .indented_button_bar,
    .wizard_progressbar {
      background: #d2d7dc;
      background: linear-gradient(top, #d2d7dc 0%, #b1b9c3 99%) !important;
      zoom: 1;
      border: 1px solid #7d90a6 !important;
      text-shadow: 0 1px 0 rgba(255, 255, 255, 0.8);
      box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.25) !important;
    }
    button,
    .button {
      color: #fff;
      border: 1px solid #000;
      text-shadow: 0 1px 0 #000;
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3);
      transition: background 5000ms ease-in;
      border-radius: 3px;
    }
    .stacked_buttons button,
    .stacked_buttons a.button {
      margin-bottom: 5px;
    }
    .stacked_buttons_large button,
    .stacked_buttons_large a.button {
      margin-bottom: 10px;
      margin-right: 10px;
    }
    button.light,
    .button.light {
      z-index: 1;
      color: #666;
      border-color: #aaa;
      text-shadow: 0 1px 0 #fff;
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.6), 0 1px 0 rgba(255, 255, 255, 0.8);
    }
    button.on_dark,
    .button.on_dark {
      box-shadow: 0 2px 0 1px rgba(0, 0, 0, 0.06), 0 1px 0 rgba(255, 255, 255, 0.2) inset;
    }
    #bg_light {
      display: none !important;
    }
    /*
        Fluid 960 Grid System - IE Fixes (IE7 and greater)
        Learn more ~ http://www.designinfluences.com/

        Licensed under GPL and MIT.
    */
    /* =Grid >> Global
    --------------------------------------------------------------------------------*/
    .ie7 .grid_1,
    .ie7 .grid_2,
    .ie7 .grid_3,
    .ie7 .grid_4,
    .ie7 .grid_5,
    .ie7 .grid_6,
    .ie7 .grid_7,
    .ie7 .grid_8,
    .ie7 .grid_9,
    .ie7 .grid_10,
    .ie7 .grid_11,
    .ie7 .grid_12,
    .ie7 .grid_13,
    .ie7 .grid_14,
    .ie7 .grid_15,
    .ie7 .grid_16,
    .ie8 .grid_1,
    .ie8 .grid_2,
    .ie8 .grid_3,
    .ie8 .grid_4,
    .ie8 .grid_5,
    .ie8 .grid_6,
    .ie8 .grid_7,
    .ie8 .grid_8,
    .ie8 .grid_9,
    .ie8 .grid_10,
    .ie8 .grid_11,
    .ie8 .grid_12,
    .ie8 .grid_13,
    .ie8 .grid_14,
    .ie8 .grid_15,
    .ie8 .grid_16 {
      margin-left: .92%;
      margin-right: .92%;
      float: left;
      display: block;
      letter-spacing: 0;
      vertical-align: inherit;
    }
    .ie7 .indent,
    .ie8 .indent {
      background: url(../images/trans_black.png) repeat;
    }
    .ie7 .flat_area h2,
    .ie8 .flat_area h2 {
      background: url(../images/trans_black.png) repeat;
    }
    .ie7 input.text,
    .ie7 .textarea,
    .ie7 .ui-multiselect,
    .ie7 table.static input.text,
    .ie8 input.text,
    .ie8 .textarea,
    .ie8 .ui-multiselect,
    .ie8 table.static input.text,
    .ie9 input.text,
    .ie9 .textarea,
    .ie9 .ui-multiselect,
    .ie9 table.static input.text {
      border: 1px solid #ccc;
      background: #eee;
    }
    .ie7 .dataTables_wrapper input.text,
    .ie8 .dataTables_wrapper input.text,
    .ie9 .dataTables_wrapper input.text {
      background: none !important;
      border: 1px solid #000;
    }
    .ie8 div.selector {
      margin-bottom: 1px;
    }
    .ie8 .slider ol.slider_labels li.last-child {
      display: none;
    }
    .ie8 button.img_icon.has_text,
    .ie8 button.div_icon.has_text {
      padding-right: 10px;
    }
    .ie7 .isolate div.main_container,
    .ie8 .isolate div.main_container {
      background: url(../images/trans_black.png) repeat;
    }
    /*

    .ie7 .col_25{width:24.9%;}





    .ie7 .gallery ul li a,
    .ie8 .gallery ul li a{
        background: #fff !important;
        
    }



    .ie8 textarea{
        padding: 0;
    }


    .ie7 fieldset.label_side > label {
        display:block;
    }


    .ie7 fieldset.label_side > div {
        width: auto;
        margin-left: -11px;
        padding-left: 29px;
        float: left;
    }
    .ie7 fieldset.label_side > div,
    .ie8 fieldset.label_side > div{
        min-height: 32px;
    }


    */
    .lt-ie9 .dropdown_menu ul li ul.dropdown li ul.drawer li a:hover {
      background: url(../images/trans_black.png) repeat;
    }
    .lt-ie7 .tabs ul li,
    .lt-ie8 .tabs ul li {
      margin-bottom: -1px;
    }


    div#main_container.popup {
     margin: 0 10px 10px;   
    }
    .dataTables_filter 
    {
         display: none;
    }

    /* css for timepicker */
    .ui-timepicker-div .ui-widget-header { margin-bottom: 8px; }
    .ui-timepicker-div dl { text-align: left; }
    .ui-timepicker-div dl dt { float: left; clear:left; padding: 0 0 0 5px; }
    .ui-timepicker-div dl dd { margin: 0 10px 10px 45%; }
    .ui-timepicker-div td { font-size: 90%; }
    .ui-tpicker-grid-label { background: none; border: none; margin: 0; padding: 0; }

    .ui-timepicker-rtl{ direction: rtl; }
    .ui-timepicker-rtl dl { text-align: right; padding: 0 5px 0 0; }
    .ui-timepicker-rtl dl dt{ float: right; clear: right; }
    .ui-timepicker-rtl dl dd { margin: 0 45% 10px 10px; }



    .text-button 
    {
        
        background: none repeat scroll 0 0 #E2E6F0;
        border: 1px solid #9DACCC;
        
        color: #000000;
        cursor: pointer;
        float: left;
        font: 12px "lucida grande",tahoma,verdana,arial,sans-serif;

        margin: 5px 2px 5px 6px;
        padding: 12px 5px;
        position: relative;
        width:87%;
        clear:both;
    }

    .text-button a.text-remove {
        background: url("close.jpg") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
        display: block;
        height: 30px;
        position: absolute;
        right: 3px;
        top: 5px;
        cursor:pointer;
        width: 30px;
    }

    .gallery_image 
    {
        float: left;
        width:100%;
        clear:both;
        position: relative;
        cursor: pointer;
    }

    .gallery_image a.text-remove {
        background: url("close.jpg") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
        display: block;
        height: 30px;
        position: absolute;
        right: 3px;
        top: 5px;
        cursor:pointer;
        width: 30px;
    }
    fieldset.noborder 
    {
        border:none;
        
    }  

    fieldset.noborder input.text
    {
        height: 27px;
    }
    fieldset.noborder > div 
    {
        padding: 0 20px 0px;
        width: auto;
    }
    fieldset.noborder > div
    {
        padding: 4px 21px;
    }
    fieldset.noborder > label 
    {

        padding: 5px 20px 0;
    }

    fieldset.label_side > div.noborder 
    {
     
        padding: 3px 5px;
     
    }

    fieldset.noborder > div > *:first-child 
    {
        margin-top: -1px;
    }

    .gallery_image fieldset.label_side > label {
        border-right: none;
        width: 90px;
    }
    a.text-remove {
        background: url("close.jpg") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
        display: block;
        height: 30px;
        position: absolute;
        right: 3px;
        top: 5px;
        cursor:pointer;
        width: 30px;
    }
    .flat_area h2
    {
        font-size:18px;
        font-family: 'Open Sans',sans-serif;
        letter-spacing: -1px !important;
        margin-top: 0px;
        font-weight: bold;
    }
    table tr.even.light, table tr.odd.light
    {
        background-color: #E6ECEF;
    }
    .checkbox_datatable
    {
        margin-top: 15px;
    }
    .check_all
    {
         margin: 0px 5px;
    }
</style>


<form action="<?php echo base_url('admin/create_match_option_static_new'); ?>" method="post" accept-charset="utf-8">

    <input type="hidden" name="match_option_id" value="<?php echo $match_id; ?>">
    <fieldset class="label_side top">
        <label for="required_field">Match</label>
        <div class="clearfix">
            <b><?php echo $match_data->title; ?></b>
        </div>
    </fieldset>


        <fieldset class="label_side top">
            <label for="required_field">Q: 1</label>
            <div class="clearfix">
                <input name="questions[]" value="Full Time..?" type="text" class="text">
                <br>
                <input name="min[]" value="<?php echo $match_data->min_bet_limit; ?>" placeholder="min bet limit" type="text" class="text">
                <br>
                <input name="max[]" value="<?php echo $match_data->max_bet_limit; ?>" placeholder="max bet limit" type="text" class="text">
                <br>
                <input name="end_time[]" class="datetimepicker_class text myTimePicker" placeholder="Ends At" type="text">
                <br>
                <input name="capital[]" value="20000.00" placeholder="Capital" type="text" class="text">
            </div>

            <div class="clearfix">
                <div class="col_20" style="margin-top:10px; margin-bottom: 10px;">
                    <input type="text" value="<?php echo $first_team; ?>" name="answers_0[]" class="valid">
                    <input type="text" value="1.75" class="col_160" name="ratios_0[]">
                </div>

                <div class="col_20" style="margin-top:10px; margin-bottom: 10px;">
                    <input type="text" value="Draw" name="answers_0[]" class="valid">
                    <input type="text" value="3.11" class="col_160" name="ratios_0[]">
                </div>

                <div class="col_20" style="margin-top:10px; margin-bottom: 10px;">
                    <input type="text" value="<?php echo $second_team; ?>" name="answers_0[]" class="valid">
                    <input type="text" value="2.75" class="col_160" name="ratios_0[]">
                </div>
            </div>
            <!-------------------------------- ######################## -------------------------------------------->

            <label for="required_field">Q: 2</label>
            <div class="clearfix">
                <input name="questions[]" value="Half Time..?" type="text" class="text">
                <br>
                <input name="min[]" value="<?php echo $match_data->min_bet_limit; ?>" placeholder="min bet limit" type="text" class="text">
                <br>
                <input name="max[]" value="<?php echo $match_data->max_bet_limit; ?>" placeholder="max bet limit" type="text" class="text">
                <br>
                <input name="end_time[]" class="datetimepicker_class text myTimePicker" placeholder="Ends At" type="text">
                <br>
                <input name="capital[]" value="20000.00" placeholder="Capital" type="text" class="text">
            </div>

            <div class="clearfix">
                <div class="col_20" style="margin-top:10px; margin-bottom: 10px;">
                    <input type="text" value="<?php echo $first_team; ?>" name="answers_1[]" class="valid">
                    <input type="text" value="2.25" class="col_160" name="ratios_1[]">
                </div>

                <div class="col_20" style="margin-top:10px; margin-bottom: 10px;">
                    <input type="text" value="Draw" name="answers_1[]" class="valid">
                    <input type="text" value="1.75" class="col_160" name="ratios_1[]">
                </div>

                <div class="col_20" style="margin-top:10px; margin-bottom: 10px;">
                    <input type="text" value="<?php echo $second_team; ?>" name="answers_1[]" class="valid">
                    <input type="text" value="3.25" class="col_160" name="ratios_1[]">
                </div>
            </div>
            <!-------------------------------- ######################## -------------------------------------------->


            <!-------------------------------- ######################## -------------------------------------------->


            <!-------------------------------- ######################## -------------------------------------------->


            <!-------------------------------- ######################## -------------------------------------------->


            <label for="required_field">Q: 3</label>
            <div class="clearfix">
                <input name="questions[]" value="Match Goal [Odd/Even]" type="text" class="text">
                <br>
                <input name="min[]" value="<?php echo $match_data->min_bet_limit; ?>" placeholder="min bet limit" type="text" class="text">
                <br>
                <input name="max[]" value="<?php echo $match_data->max_bet_limit; ?>" placeholder="max bet limit" type="text" class="text">
                <br>
                <input name="end_time[]" class="datetimepicker_class text myTimePicker" placeholder="Ends At" type="text">
                <br>
                <input name="capital[]" value="20000.00" placeholder="Capital" type="text" class="text">
            </div>

            <div class="clearfix">
                <div class="col_20" style="margin-top:10px; margin-bottom: 10px;">
                    <input type="text" value="Odd" name="answers_2[]" class="valid">
                    <input type="text" value="1.91" class="col_160" name="ratios_2[]">
                </div>

                <div class="col_20" style="margin-top:10px; margin-bottom: 10px;">
                    <input type="text" value="Even" name="answers_2[]" class="valid">
                    <input type="text" value="1.91" class="col_160" name="ratios_2[]">
                </div>

                <div class="col_20" style="margin-top:10px; margin-bottom: 10px;">
                    <input type="text" value="No Goal" name="answers_2[]" class="valid">
                    <input type="text" value="3.11" class="col_160" name="ratios_2[]">
                </div>
            </div>
            <!-------------------------------- ######################## -------------------------------------------->

            <label for="required_field">Q: 4</label>
            <div class="clearfix">
                <input name="questions[]" value="Total Match Goal Over/Under..?" type="text" class="text">
                <br>
                <input name="min[]" value="<?php echo $match_data->min_bet_limit; ?>" placeholder="min bet limit" type="text" class="text">
                <br>
                <input name="max[]" value="<?php echo $match_data->max_bet_limit; ?>" placeholder="max bet limit" type="text" class="text">
                <br>
                <input name="end_time[]" class="datetimepicker_class text myTimePicker" placeholder="Ends At" type="text">
                <br>
                <input name="capital[]" value="20000.00" placeholder="Capital" type="text" class="text">
            </div>

            <div class="clearfix">
                <div class="col_20" style="margin-top:10px; margin-bottom: 10px;">
                    <input type="text" value="Over 2.5" name="answers_3[]" class="valid">
                    <input type="text" value="1.60" class="col_160" name="ratios_3[]">
                </div>

                <div class="col_20" style="margin-top:10px; margin-bottom: 10px;">
                    <input type="text" value="Under 2.5" name="answers_3[]" class="valid">
                    <input type="text" value="1.90" class="col_160" name="ratios_3[]">
                </div>

                <div class="col_20" style="margin-top:10px; margin-bottom: 10px;">
                    <input type="text" value="No Goal" name="answers_3[]" class="valid">
                    <input type="text" value="3.33" class="col_160" name="ratios_3[]">
                </div>
            </div>
            <!-------------------------------- ######################## -------------------------------------------->


            <!-------------------------------- ######################## -------------------------------------------->


            <!-------------------------------- ######################## -------------------------------------------->


            <!-------------------------------- ######################## -------------------------------------------->


            <!-------------------------------- ######################## -------------------------------------------->


            <!-------------------------------- ######################## -------------------------------------------->


            <!-------------------------------- ######################## -------------------------------------------->


            <!-------------------------------- ######################## -------------------------------------------->

        </fieldset>

    <div class="button_bar clearfix">
        <!-- <button class="green text_only has_text" type="submit"><span>Submit</span></button> -->
        <input type="submit" name="submit" value="Submit" class="btn green text_only has_text">
    </div>
</form>


<script>

    // $('.myTimePicker').datetimepicker({
    //     dateFormat: 'yy-mm-dd',
    //     timeFormat: "HH:mm:ss"
    // });

     // $('.myTimePicker').datetimepicker();

    $('.myTimePicker').datetimepicker({
      format: 'DD/MM/YYYY HH:mm'
    });

</script>