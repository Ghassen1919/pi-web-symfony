<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* vendors/nice-select/css/style.css */
class __TwigTemplate_2355160f549452e306776fde698b3ef5995be10b7927e5b01f7c3b186941d050 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendors/nice-select/css/style.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendors/nice-select/css/style.css"));

        // line 1
        echo ".nice-select {
  -webkit-tap-highlight-color: transparent;
  background-color: #fff;
  border-radius: 5px;
  border: solid 1px #e0e7ee;
  box-sizing: border-box;
  clear: both;
  cursor: pointer;
  display: block;
  float: left;
  font-family: inherit;
  font-size: 14px;
  font-weight: normal;
  height: 42px;
  line-height: 40px;
  outline: none;
  padding-left: 18px;
  padding-right: 30px;
  position: relative;
  text-align: left !important;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  white-space: nowrap;
  width: auto; }
  .nice-select:hover {
    border-color: #d0dae5; }
  .nice-select:active, .nice-select.open, .nice-select:focus {
    border-color: #88bfff; }
  .nice-select:after {
    border-bottom: 2px solid #90a1b5;
    border-right: 2px solid #90a1b5;
    content: '';
    display: block;
    height: 5px;
    margin-top: -4px;
    pointer-events: none;
    position: absolute;
    right: 12px;
    top: 50%;
    -webkit-transform-origin: 66% 66%;
        -ms-transform-origin: 66% 66%;
            transform-origin: 66% 66%;
    -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
            transform: rotate(45deg);
    -webkit-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;
    width: 5px; }
  .nice-select.open:after {
    -webkit-transform: rotate(-135deg);
        -ms-transform: rotate(-135deg);
            transform: rotate(-135deg); }
  .nice-select.open .list {
    opacity: 1;
    pointer-events: auto;
    -webkit-transform: scale(1) translateY(0);
        -ms-transform: scale(1) translateY(0);
            transform: scale(1) translateY(0); }
  .nice-select.disabled {
    border-color: #e7ecf2;
    color: #90a1b5;
    pointer-events: none; }
    .nice-select.disabled:after {
      border-color: #cdd5de; }
  .nice-select.wide {
    width: 100%; }
    .nice-select.wide .list {
      left: 0 !important;
      right: 0 !important; }
  .nice-select.right {
    float: right; }
    .nice-select.right .list {
      left: auto;
      right: 0; }
  .nice-select.small {
    font-size: 12px;
    height: 36px;
    line-height: 34px; }
    .nice-select.small:after {
      height: 4px;
      width: 4px; }
    .nice-select.small .option {
      line-height: 34px;
      min-height: 34px; }
  .nice-select .list {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 0 1px rgba(68, 88, 112, 0.11);
    box-sizing: border-box;
    margin-top: 4px;
    opacity: 0;
    overflow: hidden;
    padding: 0;
    pointer-events: none;
    position: absolute;
    top: 100%;
    left: 0;
    -webkit-transform-origin: 50% 0;
        -ms-transform-origin: 50% 0;
            transform-origin: 50% 0;
    -webkit-transform: scale(0.75) translateY(-21px);
        -ms-transform: scale(0.75) translateY(-21px);
            transform: scale(0.75) translateY(-21px);
    -webkit-transition: all 0.2s cubic-bezier(0.5, 0, 0, 1.25), opacity 0.15s ease-out;
    transition: all 0.2s cubic-bezier(0.5, 0, 0, 1.25), opacity 0.15s ease-out;
    z-index: 9; }
    .nice-select .list:hover .option:not(:hover) {
      background-color: transparent !important; }
  .nice-select .option {
    cursor: pointer;
    font-weight: 400;
    line-height: 40px;
    list-style: none;
    min-height: 40px;
    outline: none;
    padding-left: 18px;
    padding-right: 29px;
    text-align: left;
    -webkit-transition: all 0.2s;
    transition: all 0.2s; }
    .nice-select .option:hover, .nice-select .option.focus, .nice-select .option.selected.focus {
      background-color: #f6f7f9; }
    .nice-select .option.selected {
      font-weight: bold; }
    .nice-select .option.disabled {
      background-color: transparent;
      color: #90a1b5;
      cursor: default; }

.no-csspointerevents .nice-select .list {
  display: none; }

.no-csspointerevents .nice-select.open .list {
  display: block; }

code[class*=\"language-\"],
pre[class*=\"language-\"] {
  border-radius: 2px;
  color: #445870;
  -webkit-hyphens: none;
      -ms-hyphens: none;
          hyphens: none;
  line-height: 1.5;
  -moz-tab-size: 4;
    -o-tab-size: 4;
       tab-size: 4;
  text-align: left;
  white-space: pre;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  direction: ltr;
  font-family: Inconsolata, monospace;
  font-size: 13px;
  letter-spacing: 0; }

/* Code blocks */
pre[class*=\"language-\"] {
  padding: 18px 24px;
  margin: 0 0 24px;
  overflow: auto; }

:not(pre) > code[class*=\"language-\"],
pre[class*=\"language-\"] {
  background: #f6f7f9; }

/* Inline code */
:not(pre) > code[class*=\"language-\"] {
  padding: 0 2px 1px; }

.token.comment,
.token.prolog,
.token.doctype,
.token.cdata {
  color: #90a1b5; }

.token.punctuation {
  color: #999; }

.namespace {
  opacity: .7; }

.token.property,
.token.tag,
.token.boolean,
.token.number,
.token.constant,
.token.symbol,
.token.deleted {
  color: #EC4444; }

.token.selector,
.token.attr-name,
.token.string,
.token.char,
.token.builtin,
.token.inserted {
  color: #4ABF60; }

.token.operator,
.token.entity,
.token.url,
.language-css .token.string,
.style .token.string {
  color: #a67f59;
  background: rgba(255, 255, 255, 0.5); }

.token.atrule,
.token.attr-value,
.token.keyword {
  color: #55a1fb; }

.token.function {
  color: #DD4A68; }

.token.regex,
.token.important,
.token.variable {
  color: #e90; }

.token.important,
.token.bold {
  font-weight: bold; }

.token.italic {
  font-style: italic; }

.token.entity {
  cursor: help; }

body {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #445870;
  font-family: 'Work Sans', sans-serif;
  font-size: 14px;
  font-weight: normal;
  letter-spacing: -0.25px;
  margin: 0;
  padding: 0 18px; }

p {
  line-height: 1.6;
  margin: 0 0 1.6em; }

h1 {
  font-size: 36px;
  font-weight: 300;
  letter-spacing: -2px;
  margin: 0 0 24px; }

h2 {
  font-size: 22px;
  font-weight: 400;
  margin: 0 0 12px;
  padding-top: 48px; }

h3 {
  font-size: 18px;
  font-weight: 400;
  margin: 0 0 12px;
  padding-top: 12px; }

ul {
  margin: 0;
  padding-left: 16px; }

a:not(.button) {
  color: #55a1fb;
  outline: none;
  text-decoration: none;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  border-bottom: 1px solid transparent; }
  a:not(.button):hover, a:not(.button):focus {
    border-bottom: 1px solid #88bfff; }

::-moz-selection {
  background: #f3f4f7; }

::selection {
  background: #f3f4f7; }

.container {
  margin: 96px auto 60px;
  max-width: 40em; }

.box {
  background-color: #f6f7f9;
  border-radius: 2px;
  margin-bottom: 30px;
  padding: 24px 30px; }
  .box:before, .box:after {
    content: \"\";
    display: table; }
  .box:after {
    clear: both; }

label {
  color: #90a1b5;
  font-size: 11px;
  margin: 0 2px 4px;
  text-transform: uppercase;
  float: left; }
  label.right {
    float: right; }

.button {
  -webkit-tap-highlight-color: transparent;
  background-color: #55a1fb;
  border-radius: 5px;
  border: none;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-weight: 600;
  height: 42px;
  line-height: 42px;
  outline: none;
  padding: 0 24px;
  text-align: center;
  text-decoration: none;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  white-space: nowrap;
  width: auto; }
  .button:hover, .button:focus {
    background-color: #4196fb; }
  .button:active, .button.nice-select.open {
    background-color: #2d8bfa; }
  .button.light {
    background-color: #fff;
    border: 1px solid #e0e7ee;
    color: #55a1fb;
    line-height: 40px;
    margin-left: 24px; }
    .button.light:hover {
      border-color: #d0dae5; }
    .button.light:active, .button.light.nice-select.open, .button.light:focus {
      border-color: #88bfff; }
  @media screen and (max-width: 360px) {
    .button {
      width: 100%; }
      .button.light {
        margin: 18px 0 0; } }

.header {
  text-align: center;
  margin-bottom: 60px; }
  @media screen and (min-width: 600px) {
    .header {
      padding: 0 18px; } }
  .header p {
    color: #90a1b5;
    font-size: 18px;
    margin-bottom: 36px; }

.footer {
  text-align: center; }
  .footer p {
    margin-bottom: 90px; }

.credit {
  color: #90a1b5;
  clear: both;
  font-size: 12px;
  margin-top: 90px; }
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendors/nice-select/css/style.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".nice-select {
  -webkit-tap-highlight-color: transparent;
  background-color: #fff;
  border-radius: 5px;
  border: solid 1px #e0e7ee;
  box-sizing: border-box;
  clear: both;
  cursor: pointer;
  display: block;
  float: left;
  font-family: inherit;
  font-size: 14px;
  font-weight: normal;
  height: 42px;
  line-height: 40px;
  outline: none;
  padding-left: 18px;
  padding-right: 30px;
  position: relative;
  text-align: left !important;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  white-space: nowrap;
  width: auto; }
  .nice-select:hover {
    border-color: #d0dae5; }
  .nice-select:active, .nice-select.open, .nice-select:focus {
    border-color: #88bfff; }
  .nice-select:after {
    border-bottom: 2px solid #90a1b5;
    border-right: 2px solid #90a1b5;
    content: '';
    display: block;
    height: 5px;
    margin-top: -4px;
    pointer-events: none;
    position: absolute;
    right: 12px;
    top: 50%;
    -webkit-transform-origin: 66% 66%;
        -ms-transform-origin: 66% 66%;
            transform-origin: 66% 66%;
    -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
            transform: rotate(45deg);
    -webkit-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;
    width: 5px; }
  .nice-select.open:after {
    -webkit-transform: rotate(-135deg);
        -ms-transform: rotate(-135deg);
            transform: rotate(-135deg); }
  .nice-select.open .list {
    opacity: 1;
    pointer-events: auto;
    -webkit-transform: scale(1) translateY(0);
        -ms-transform: scale(1) translateY(0);
            transform: scale(1) translateY(0); }
  .nice-select.disabled {
    border-color: #e7ecf2;
    color: #90a1b5;
    pointer-events: none; }
    .nice-select.disabled:after {
      border-color: #cdd5de; }
  .nice-select.wide {
    width: 100%; }
    .nice-select.wide .list {
      left: 0 !important;
      right: 0 !important; }
  .nice-select.right {
    float: right; }
    .nice-select.right .list {
      left: auto;
      right: 0; }
  .nice-select.small {
    font-size: 12px;
    height: 36px;
    line-height: 34px; }
    .nice-select.small:after {
      height: 4px;
      width: 4px; }
    .nice-select.small .option {
      line-height: 34px;
      min-height: 34px; }
  .nice-select .list {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 0 1px rgba(68, 88, 112, 0.11);
    box-sizing: border-box;
    margin-top: 4px;
    opacity: 0;
    overflow: hidden;
    padding: 0;
    pointer-events: none;
    position: absolute;
    top: 100%;
    left: 0;
    -webkit-transform-origin: 50% 0;
        -ms-transform-origin: 50% 0;
            transform-origin: 50% 0;
    -webkit-transform: scale(0.75) translateY(-21px);
        -ms-transform: scale(0.75) translateY(-21px);
            transform: scale(0.75) translateY(-21px);
    -webkit-transition: all 0.2s cubic-bezier(0.5, 0, 0, 1.25), opacity 0.15s ease-out;
    transition: all 0.2s cubic-bezier(0.5, 0, 0, 1.25), opacity 0.15s ease-out;
    z-index: 9; }
    .nice-select .list:hover .option:not(:hover) {
      background-color: transparent !important; }
  .nice-select .option {
    cursor: pointer;
    font-weight: 400;
    line-height: 40px;
    list-style: none;
    min-height: 40px;
    outline: none;
    padding-left: 18px;
    padding-right: 29px;
    text-align: left;
    -webkit-transition: all 0.2s;
    transition: all 0.2s; }
    .nice-select .option:hover, .nice-select .option.focus, .nice-select .option.selected.focus {
      background-color: #f6f7f9; }
    .nice-select .option.selected {
      font-weight: bold; }
    .nice-select .option.disabled {
      background-color: transparent;
      color: #90a1b5;
      cursor: default; }

.no-csspointerevents .nice-select .list {
  display: none; }

.no-csspointerevents .nice-select.open .list {
  display: block; }

code[class*=\"language-\"],
pre[class*=\"language-\"] {
  border-radius: 2px;
  color: #445870;
  -webkit-hyphens: none;
      -ms-hyphens: none;
          hyphens: none;
  line-height: 1.5;
  -moz-tab-size: 4;
    -o-tab-size: 4;
       tab-size: 4;
  text-align: left;
  white-space: pre;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  direction: ltr;
  font-family: Inconsolata, monospace;
  font-size: 13px;
  letter-spacing: 0; }

/* Code blocks */
pre[class*=\"language-\"] {
  padding: 18px 24px;
  margin: 0 0 24px;
  overflow: auto; }

:not(pre) > code[class*=\"language-\"],
pre[class*=\"language-\"] {
  background: #f6f7f9; }

/* Inline code */
:not(pre) > code[class*=\"language-\"] {
  padding: 0 2px 1px; }

.token.comment,
.token.prolog,
.token.doctype,
.token.cdata {
  color: #90a1b5; }

.token.punctuation {
  color: #999; }

.namespace {
  opacity: .7; }

.token.property,
.token.tag,
.token.boolean,
.token.number,
.token.constant,
.token.symbol,
.token.deleted {
  color: #EC4444; }

.token.selector,
.token.attr-name,
.token.string,
.token.char,
.token.builtin,
.token.inserted {
  color: #4ABF60; }

.token.operator,
.token.entity,
.token.url,
.language-css .token.string,
.style .token.string {
  color: #a67f59;
  background: rgba(255, 255, 255, 0.5); }

.token.atrule,
.token.attr-value,
.token.keyword {
  color: #55a1fb; }

.token.function {
  color: #DD4A68; }

.token.regex,
.token.important,
.token.variable {
  color: #e90; }

.token.important,
.token.bold {
  font-weight: bold; }

.token.italic {
  font-style: italic; }

.token.entity {
  cursor: help; }

body {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #445870;
  font-family: 'Work Sans', sans-serif;
  font-size: 14px;
  font-weight: normal;
  letter-spacing: -0.25px;
  margin: 0;
  padding: 0 18px; }

p {
  line-height: 1.6;
  margin: 0 0 1.6em; }

h1 {
  font-size: 36px;
  font-weight: 300;
  letter-spacing: -2px;
  margin: 0 0 24px; }

h2 {
  font-size: 22px;
  font-weight: 400;
  margin: 0 0 12px;
  padding-top: 48px; }

h3 {
  font-size: 18px;
  font-weight: 400;
  margin: 0 0 12px;
  padding-top: 12px; }

ul {
  margin: 0;
  padding-left: 16px; }

a:not(.button) {
  color: #55a1fb;
  outline: none;
  text-decoration: none;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  border-bottom: 1px solid transparent; }
  a:not(.button):hover, a:not(.button):focus {
    border-bottom: 1px solid #88bfff; }

::-moz-selection {
  background: #f3f4f7; }

::selection {
  background: #f3f4f7; }

.container {
  margin: 96px auto 60px;
  max-width: 40em; }

.box {
  background-color: #f6f7f9;
  border-radius: 2px;
  margin-bottom: 30px;
  padding: 24px 30px; }
  .box:before, .box:after {
    content: \"\";
    display: table; }
  .box:after {
    clear: both; }

label {
  color: #90a1b5;
  font-size: 11px;
  margin: 0 2px 4px;
  text-transform: uppercase;
  float: left; }
  label.right {
    float: right; }

.button {
  -webkit-tap-highlight-color: transparent;
  background-color: #55a1fb;
  border-radius: 5px;
  border: none;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-weight: 600;
  height: 42px;
  line-height: 42px;
  outline: none;
  padding: 0 24px;
  text-align: center;
  text-decoration: none;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  white-space: nowrap;
  width: auto; }
  .button:hover, .button:focus {
    background-color: #4196fb; }
  .button:active, .button.nice-select.open {
    background-color: #2d8bfa; }
  .button.light {
    background-color: #fff;
    border: 1px solid #e0e7ee;
    color: #55a1fb;
    line-height: 40px;
    margin-left: 24px; }
    .button.light:hover {
      border-color: #d0dae5; }
    .button.light:active, .button.light.nice-select.open, .button.light:focus {
      border-color: #88bfff; }
  @media screen and (max-width: 360px) {
    .button {
      width: 100%; }
      .button.light {
        margin: 18px 0 0; } }

.header {
  text-align: center;
  margin-bottom: 60px; }
  @media screen and (min-width: 600px) {
    .header {
      padding: 0 18px; } }
  .header p {
    color: #90a1b5;
    font-size: 18px;
    margin-bottom: 36px; }

.footer {
  text-align: center; }
  .footer p {
    margin-bottom: 90px; }

.credit {
  color: #90a1b5;
  clear: both;
  font-size: 12px;
  margin-top: 90px; }
", "vendors/nice-select/css/style.css", "C:\\xampp\\htdocs\\PIDEV\\templates\\vendors\\nice-select\\css\\style.css");
    }
}
