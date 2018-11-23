<?php
/*
 *
 * Customizr
 *
 */
?>
/*<style>*/

.customizr-button {
	position: fixed;
	right: 20px;
	bottom: 20px;
	cursor: pointer;
	width: 30px;
	height: 30px;
	line-height: 30px;
	text-align: center;
	background: rgba(0,0,0,0.8);
	border-radius: 3px;
	color: white;
}

.customizr-panel {
	display: none;
	position: fixed;
	width: 600px;
	height: 100%;
	right: 0;
	top: 0;
	background-color: #ecf0f1;
	padding: 20px;
	-webkit-box-shadow: -10px 0px 50px -10px rgba(0,0,0,0.75);
	-moz-box-shadow: -10px 0px 50px -10px rgba(0,0,0,0.75);
	box-shadow: -10px 0px 50px -10px rgba(0,0,0,0.75);
	overflow: auto;
	z-index: 9001;
}

.customizr-panel h1 {
	padding-bottom: 10px;
	margin-bottom: 20px;
	border-bottom: 1px solid #444;
}

.customizer-js-title {
	margin-top: 20px;
}

.ace_editor {
	height: 300px;
}

.customizr-css-input,
.customizr-js-input {
	display: none;
}

.customizr-options {
	float: right;
	margin-top: 20px;
}

.customizr-options li {
	float: left;
	margin-right: 10px;
	margin-bottom: 50px;
}

.customizr-options-preview {
	color: white;
	background-color: #2980b9;
	padding: 5px 10px;
	border-radius: 3px;
	cursor: pointer;
}

.customizr-options-preview:hover {
	background-color: #3498db;
}

.customizr-options-save {
	color: white;
	background-color: #f39c12;
	padding: 5px 10px;
	border-radius: 3px;
	cursor: pointer;
}

.customizr-options-save:hover {
	background-color: #f1c40f;
}

.customizr-options-flush {
	color: white;
	background-color: #27ae60;
	padding: 5px 10px;
	border-radius: 3px;
	cursor: pointer;
}

.customizr-options-flush:hover {
	background-color: #2ecc71;
}

.customizr-options-close {
	color: white;
	background-color: #c0392b;
	padding: 5px 10px;
	border-radius: 3px;
	cursor: pointer;
}

.customizr-options-close:hover {
	background-color: #e74c3c;
}

.elgg-system-messages {
	z-index: 9999;
}