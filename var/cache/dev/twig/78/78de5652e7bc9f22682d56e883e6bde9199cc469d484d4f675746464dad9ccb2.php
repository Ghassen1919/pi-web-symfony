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

/* scss/_elements.scss */
class __TwigTemplate_e0897e972145d8aa3ca023b9c9529ccd11a49de8d8de9d288f9d67893ec46648 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_elements.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/_elements.scss"));

        // line 1
        echo "/*============== Elements Area css ================*/

.mb-20{
\tmargin-bottom: 20px;
}
.mb-30{
\tmargin-bottom: 30px;
}

.sample-text-area{
\tpadding: 100px 0px;
\t.title_color{
\t\tmargin-bottom: 30px;
\t}
\tp{
\t\tline-height: 26px;
\t\tb{
\t\t\tfont-weight: bold;
\t\t\tcolor: \$primary-color;
\t\t}
\t\ti{
\t\t\tcolor: \$primary-color;
\t\t\tfont-style: italic;
\t\t}
\t\tsup{
\t\t\tcolor: \$primary-color;
\t\t\tfont-style: italic;
\t\t}
\t\tsub{
\t\t\tcolor: \$primary-color;
\t\t\tfont-style: italic;
\t\t}
\t\tdel{
\t\t\tcolor: \$primary-color;
\t\t}
\t\tu{
\t\t\tcolor: \$primary-color;
\t\t}
\t}
}

/*============== End Elements Area css ================*/

/*==============Elements Button Area css ================*/
.elements_button{
\t.title_color{
\t\tmargin-bottom: 30px;
\t\tcolor: \$title-color;
\t}
}
.title_color{
\tcolor: \$title-color;
}
.button-group-area{
\tmargin-top: 15px;
\t&:nth-child(odd){
\t\tmargin-top: 40px;
\t}
\t&:first-child{
\t\tmargin-top: 0px;
\t}
\t.theme_btn{
\t\tmargin-right: 10px;
\t}
\t.link{
\t\ttext-decoration: underline;
\t\tcolor: \$title-color;
\t\tbackground: transparent;
\t\t&:hover{
\t\t\tcolor: #fff;
\t\t}
\t}
\t.disable{
\t\tbackground: transparent;
\t\tcolor: #007bff;
\t\tcursor: not-allowed;
\t\t&:before{
\t\t\tdisplay: none;
\t\t}
\t}
}
.primary{
\tbackground: #52c5fd;
\t&:before{
\t\tbackground: #2faae6;
\t}
}
.success{
\tbackground: #4cd3e3;
\t&:before{
\t\tbackground: #2ebccd;
\t}
}
.info{
\tbackground: #38a4ff;
\t&:before{
\t\tbackground: #298cdf;
\t}
}
.warning{
\tbackground: #f4e700;
\t&:before{
\t\tbackground: #e1d608;
\t}
}
.danger{
\tbackground: #f54940;
\t&:before{
\t\tbackground: #e13b33;
\t}
}
.border_btn{
\t
}
.primary-border{
\tbackground: transparent;
\tborder: 1px solid #52c5fd;
\tcolor: #52c5fd;
\t&:before{
\t\tbackground: #52c5fd;
\t}
}
.success-border{
\tbackground: transparent;
\tborder: 1px solid #4cd3e3;
\tcolor: #4cd3e3;
\t&:before{
\t\tbackground: #4cd3e3;
\t}
}
.info-border{
\tbackground: transparent;
\tborder: 1px solid #38a4ff;
\tcolor: #38a4ff;
\t&:before{
\t\tbackground: #38a4ff;
\t}
}
.warning-border{
\tbackground: #fff;
\tborder: 1px solid #f4e700;
\tcolor: #f4e700;
\t&:before{
\t\tbackground: #f4e700;
\t}
}
.danger-border{
\tbackground: transparent;
\tborder: 1px solid #f54940;
\tcolor: #f54940;
\t&:before{
\t\tbackground: #f54940;
\t}
}
.link-border{
\tbackground: transparent;
\tborder: 1px solid \$primary-color;
\tcolor: \$primary-color;
\t&:before{
\t\tbackground: \$primary-color;
\t}
}
.radius{
\tborder-radius: 3px;
}
.circle{
\tborder-radius: 20px;
}
.arrow{
\tspan{
\t\tpadding-left: 5px;
\t}
}
.e-large{
\tline-height: 50px;
\tpadding-top: 0px;
\tpadding-bottom: 0px;
}
.large{
\tline-height: 45px;
\tpadding-top: 0px;
\tpadding-bottom: 0px;
}
.medium{
\tline-height: 30px;
\tpadding-top: 0px;
\tpadding-bottom: 0px;
}
.small{
\tline-height: 25px;
\tpadding-top: 0px;
\tpadding-bottom: 0px;
}
.general{
\tline-height: 38px;
\tpadding-top: 0px;
\tpadding-bottom: 0px;
}
/*==============End Elements Button Area css ================*/




/* =================================== */
/*  Elements Page Styles
/* =================================== */
/*---------- Start Elements Page -------------*/
.whole-wrap {
}

.generic-banner {
  margin-top: 60px;
  text-align: center;
}

.generic-banner .height {
  height: 600px;
}

@media (max-width: 767.98px) {
  .generic-banner .height {
    height: 400px;
  }
}

.generic-banner .generic-banner-content h2 {
  line-height: 1.2em;
  margin-bottom: 20px;
}

@media (max-width: 991.98px) {
  .generic-banner .generic-banner-content h2 br {
    display: none;
  }
}

.generic-banner .generic-banner-content p {
  text-align: center;
  font-size: 16px;
}

@media (max-width: 991.98px) {
  .generic-banner .generic-banner-content p br {
    display: none;
  }
}

.generic-content h1 {
  font-weight: 600;
}

.about-generic-area {
  background: #fff;
}

.about-generic-area p {
  margin-bottom: 20px;
}

.white-bg {
  background: #fff;
}

.section-top-border {
  padding: 50px 0;
  border-top: 1px dotted #eee;
}

.switch-wrap {
  margin-bottom: 10px;
}

.switch-wrap p {
  margin: 0;
}

/*---------- End Elements Page -------------*/


.sample-text-area {
  padding: 100px 0 70px 0;
}

.sample-text {
  margin-bottom: 0;
}

.text-heading {
  margin-bottom: 30px;
  font-size: 24px;
}

.typo-list {
  margin-bottom: 10px;
}

@media (max-width: 767px) {
  .typo-sec {
    margin-bottom: 30px;
  }
}

@media (max-width: 767px) {
  .element-wrap {
    margin-top: 30px;
  }
}

b, sup, sub, u, del {
  color: #f8b600;
}

h1 {
  font-size: 36px;
}

h2 {
  font-size: 30px;
}

h3 {
  font-size: 24px;
}

h4 {
  font-size: 18px;
}

h5 {
  font-size: 16px;
}

h6 {
  font-size: 14px;
}



.typography h1, .typography h2, .typography h3, .typography h4, .typography h5, .typography h6 {
  color: #777777;
}

.button-area {
}

.button-area .border-top-generic {
  padding: 70px 15px;
  border-top: 1px dotted #eee;
}

.button-group-area .genric-btn {
  margin-right: 10px;
  margin-top: 10px;
}

.button-group-area .genric-btn:last-child {
  margin-right: 0;
}

.circle {
  border-radius: 20px;
}

.genric-btn {
  display: inline-block;
  outline: none;
  line-height: 40px;
  padding: 0 30px;
  font-size: .8em;
  text-align: center;
  text-decoration: none;
  font-weight: 500;
  cursor: pointer;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.genric-btn:focus {
  outline: none;
}

.genric-btn.e-large {
  padding: 0 40px;
  line-height: 50px;
}

.genric-btn.large {
  line-height: 45px;
}

.genric-btn.medium {
  line-height: 30px;
}

.genric-btn.small {
  line-height: 25px;
}

.genric-btn.radius {
  border-radius: 3px;
}

.genric-btn.circle {
  border-radius: 20px;
}

.genric-btn.arrow {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.genric-btn.arrow span {
  margin-left: 10px;
}

.genric-btn.default {
  color: #222222;
  background: #f9f9ff;
  border: 1px solid transparent;
}

.genric-btn.default:hover {
  border: 1px solid #f9f9ff;
  background: #fff;
}

.genric-btn.default-border {
  border: 1px solid #f9f9ff;
  background: #fff;
}

.genric-btn.default-border:hover {
  color: #222222;
  background: #f9f9ff;
  border: 1px solid transparent;
}

.genric-btn.primary {
  color: #fff;
  background: #f8b600;
  border: 1px solid transparent;
}

.genric-btn.primary:hover {
  color: #f8b600;
  border: 1px solid #f8b600;
  background: #fff;
}

.genric-btn.primary-border {
  color: #f8b600;
  border: 1px solid #f8b600;
  background: #fff;
}

.genric-btn.primary-border:hover {
  color: #fff;
  background: #f8b600;
  border: 1px solid transparent;
}

.genric-btn.success {
  color: #fff;
  background: #4cd3e3;
  border: 1px solid transparent;
}

.genric-btn.success:hover {
  color: #4cd3e3;
  border: 1px solid #4cd3e3;
  background: #fff;
}

.genric-btn.success-border {
  color: #4cd3e3;
  border: 1px solid #4cd3e3;
  background: #fff;
}

.genric-btn.success-border:hover {
  color: #fff;
  background: #4cd3e3;
  border: 1px solid transparent;
}

.genric-btn.info {
  color: #fff;
  background: #38a4ff;
  border: 1px solid transparent;
}

.genric-btn.info:hover {
  color: #38a4ff;
  border: 1px solid #38a4ff;
  background: #fff;
}

.genric-btn.info-border {
  color: #38a4ff;
  border: 1px solid #38a4ff;
  background: #fff;
}

.genric-btn.info-border:hover {
  color: #fff;
  background: #38a4ff;
  border: 1px solid transparent;
}

.genric-btn.warning {
  color: #fff;
  background: #f4e700;
  border: 1px solid transparent;
}

.genric-btn.warning:hover {
  color: #f4e700;
  border: 1px solid #f4e700;
  background: #fff;
}

.genric-btn.warning-border {
  color: #f4e700;
  border: 1px solid #f4e700;
  background: #fff;
}

.genric-btn.warning-border:hover {
  color: #fff;
  background: #f4e700;
  border: 1px solid transparent;
}

.genric-btn.danger {
  color: #fff;
  background: #f44a40;
  border: 1px solid transparent;
}

.genric-btn.danger:hover {
  color: #f44a40;
  border: 1px solid #f44a40;
  background: #fff;
}

.genric-btn.danger-border {
  color: #f44a40;
  border: 1px solid #f44a40;
  background: #fff;
}

.genric-btn.danger-border:hover {
  color: #fff;
  background: #f44a40;
  border: 1px solid transparent;
}

.genric-btn.link {
  color: #222222;
  background: #f9f9ff;
  text-decoration: underline;
  border: 1px solid transparent;
}

.genric-btn.link:hover {
  color: #222222;
  border: 1px solid #f9f9ff;
  background: #fff;
}

.genric-btn.link-border {
  color: #222222;
  border: 1px solid #f9f9ff;
  background: #fff;
  text-decoration: underline;
}

.genric-btn.link-border:hover {
  color: #222222;
  background: #f9f9ff;
  border: 1px solid transparent;
}

.genric-btn.disable {
  color: #222222, 0.3;
  background: #f9f9ff;
  border: 1px solid transparent;
  cursor: not-allowed;
}

.generic-blockquote {
  padding: 30px 50px 30px 30px;
  background: #fff;
  border-left: 2px solid #f8b600;
}

@media (max-width: 991px) {
  .progress-table-wrap {
    overflow-x: scroll;
  }
}

.progress-table {
  background: #fff;
  padding: 15px 0px 30px 0px;
  min-width: 800px;
}

.progress-table .serial {
  width: 11.83%;
  padding-left: 30px;
}

.progress-table .country {
  width: 28.07%;
}

.progress-table .visit {
  width: 19.74%;
}

.progress-table .percentage {
  width: 40.36%;
  padding-right: 50px;
}

.progress-table .table-head {
  display: flex;
}

.progress-table .table-head .serial, .progress-table .table-head .country, .progress-table .table-head .visit, .progress-table .table-head .percentage {
  color: #222222;
  line-height: 40px;
  text-transform: uppercase;
  font-weight: 500;
}

.progress-table .table-row {
  padding: 15px 0;
  border-top: 1px solid #edf3fd;
  display: flex;
}

.progress-table .table-row .serial, .progress-table .table-row .country, .progress-table .table-row .visit, .progress-table .table-row .percentage {
  display: flex;
  align-items: center;
}

.progress-table .table-row .country img {
  margin-right: 15px;
}

.progress-table .table-row .percentage .progress {
  width: 80%;
  border-radius: 0px;
  background: transparent;
}

.progress-table .table-row .percentage .progress .progress-bar {
  height: 5px;
  line-height: 5px;
}

.progress-table .table-row .percentage .progress .progress-bar.color-1 {
  background-color: #6382e6;
}

.progress-table .table-row .percentage .progress .progress-bar.color-2 {
  background-color: #e66686;
}

.progress-table .table-row .percentage .progress .progress-bar.color-3 {
  background-color: #f09359;
}

.progress-table .table-row .percentage .progress .progress-bar.color-4 {
  background-color: #73fbaf;
}

.progress-table .table-row .percentage .progress .progress-bar.color-5 {
  background-color: #73fbaf;
}

.progress-table .table-row .percentage .progress .progress-bar.color-6 {
  background-color: #6382e6;
}

.progress-table .table-row .percentage .progress .progress-bar.color-7 {
  background-color: #a367e7;
}

.progress-table .table-row .percentage .progress .progress-bar.color-8 {
  background-color: #e66686;
}

.single-gallery-image {
  margin-top: 30px;
  background-repeat: no-repeat !important;
  background-position: center center !important;
  background-size: cover !important;
  height: 200px;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.single-gallery-image:hover {
  opacity: .8;
}

.list-style {
  width: 14px;
  height: 14px;
}

.unordered-list li {
  position: relative;
  padding-left: 30px;
  line-height: 1.82em !important;
}

.unordered-list li:before {
  content: \"\";
  position: absolute;
  width: 14px;
  height: 14px;
  border: 3px solid #f8b600;
  background: #fff;
  top: 4px;
  left: 0;
  border-radius: 50%;
}

.ordered-list {
  margin-left: 30px;
}

.ordered-list li {
  list-style-type: decimal-leading-zero;
  color: #f8b600;
  font-weight: 500;
  line-height: 1.82em !important;
}

.ordered-list li span {
  font-weight: 300;
  color: #777777;
}

.ordered-list-alpha li {
  margin-left: 30px;
  list-style-type: lower-alpha;
  color: #f8b600;
  font-weight: 500;
  line-height: 1.82em !important;
}

.ordered-list-alpha li span {
  font-weight: 300;
  color: #777777;
}

.ordered-list-roman li {
  margin-left: 30px;
  list-style-type: lower-roman;
  color: #f8b600;
  font-weight: 500;
  line-height: 1.82em !important;
}

.ordered-list-roman li span {
  font-weight: 300;
  color: #777777;
}

.single-input {
  display: block;
  width: 100%;
  line-height: 40px;
  border: none;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
}

.single-input:focus {
  outline: none;
}

.input-group-icon {
  position: relative;
}

.input-group-icon .icon {
  position: absolute;
  left: 20px;
  top: 0;
  line-height: 40px;
  z-index: 3;
}

.input-group-icon .icon i {
  color: #797979;
}

.input-group-icon .single-input {
  padding-left: 45px;
}

.single-textarea {
  display: block;
  width: 100%;
  line-height: 40px;
  border: none;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
  height: 100px;
  resize: none;
}

.single-textarea:focus {
  outline: none;
}

.single-input-primary {
  display: block;
  width: 100%;
  line-height: 40px;
  border: 1px solid transparent;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
}

.single-input-primary:focus {
  outline: none;
  border: 1px solid #f8b600;
}

.single-input-accent {
  display: block;
  width: 100%;
  line-height: 40px;
  border: 1px solid transparent;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
}

.single-input-accent:focus {
  outline: none;
  border: 1px solid #eb6b55;
}

.single-input-secondary {
  display: block;
  width: 100%;
  line-height: 40px;
  border: 1px solid transparent;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
}

.single-input-secondary:focus {
  outline: none;
  border: 1px solid #f09359;
}

.default-switch {
  width: 35px;
  height: 17px;
  border-radius: 8.5px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.default-switch input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  cursor: pointer;
}

.default-switch input + label {
  position: absolute;
  top: 1px;
  left: 1px;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #f8b600;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}

.default-switch input:checked + label {
  left: 19px;
}

.single-element-widget {
  margin-bottom: 30px;
}

.primary-switch {
  width: 35px;
  height: 17px;
  border-radius: 8.5px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.primary-switch input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.primary-switch input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
}

.primary-switch input + label:before {
  content: \"\";
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background: transparent;
  border-radius: 8.5px;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
}

.primary-switch input + label:after {
  content: \"\";
  position: absolute;
  top: 1px;
  left: 1px;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #fff;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}

.primary-switch input:checked + label:after {
  left: 19px;
}

.primary-switch input:checked + label:before {
  background: #f8b600;
}

.confirm-switch {
  width: 35px;
  height: 17px;
  border-radius: 8.5px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.confirm-switch input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.confirm-switch input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
}

.confirm-switch input + label:before {
  content: \"\";
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background: transparent;
  border-radius: 8.5px;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  cursor: pointer;
}

.confirm-switch input + label:after {
  content: \"\";
  position: absolute;
  top: 1px;
  left: 1px;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #fff;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}

.confirm-switch input:checked + label:after {
  left: 19px;
}

.confirm-switch input:checked + label:before {
  background: #4cd3e3;
}

.primary-checkbox {
  width: 16px;
  height: 16px;
  border-radius: 3px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.primary-checkbox input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.primary-checkbox input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 3px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}
.single-defination{
\th4{
\t\tcolor: \$title-color;
\t}
}

.primary-checkbox input:checked + label {
  background: url(../img/elements/primary-check.png) no-repeat center center/cover;
  border: none;
}

.confirm-checkbox {
  width: 16px;
  height: 16px;
  border-radius: 3px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.confirm-checkbox input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.confirm-checkbox input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 3px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.confirm-checkbox input:checked + label {
  background: url(../img/elements/success-check.png) no-repeat center center/cover;
  border: none;
}

.disabled-checkbox {
  width: 16px;
  height: 16px;
  border-radius: 3px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.disabled-checkbox input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.disabled-checkbox input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 3px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.disabled-checkbox input:disabled {
  cursor: not-allowed;
  z-index: 3;
}

.disabled-checkbox input:checked + label {
  background: url(../img/elements/disabled-check.png) no-repeat center center/cover;
  border: none;
}

.primary-radio {
  width: 16px;
  height: 16px;
  border-radius: 8px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.primary-radio input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.primary-radio input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 8px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.primary-radio input:checked + label {
  background: url(../img/elements/primary-radio.png) no-repeat center center/cover;
  border: none;
}

.confirm-radio {
  width: 16px;
  height: 16px;
  border-radius: 8px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.confirm-radio input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.confirm-radio input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 8px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.confirm-radio input:checked + label {
  background: url(../img/elements/success-radio.png) no-repeat center center/cover;
  border: none;
}

.disabled-radio {
  width: 16px;
  height: 16px;
  border-radius: 8px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.disabled-radio input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.disabled-radio input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 8px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.disabled-radio input:disabled {
  cursor: not-allowed;
  z-index: 3;
}
.unordered-list{
\tlist-style: none;
\tpadding: 0px;
\tmargin: 0px;
}
.ordered-list{
\tlist-style: none;
\tpadding: 0px;
}
.disabled-radio input:checked + label {
  background: url(../img/elements/disabled-radio.png) no-repeat center center/cover;
  border: none;
}

.default-select {
  height: 40px;
}

.default-select .nice-select {
  border: none;
  border-radius: 0px;
  height: 40px;
  background: #fff;
  padding-left: 20px;
  padding-right: 40px;
}

.default-select .nice-select .list {
  margin-top: 0;
  border: none;
  border-radius: 0px;
  box-shadow: none;
  width: 100%;
  padding: 10px 0 10px 0px;
}

.default-select .nice-select .list .option {
  font-weight: 300;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  line-height: 28px;
  min-height: 28px;
  font-size: 12px;
  padding-left: 20px;
}

.default-select .nice-select .list .option.selected {
  color: #f8b600;
  background: transparent;
}

.default-select .nice-select .list .option:hover {
  color: #f8b600;
  background: transparent;
}

.default-select .current {
  margin-right: 50px;
  font-weight: 300;
}

.default-select .nice-select::after {
  right: 20px;
}

@media (max-width: 991px) {
  .left-align-p p {
    margin-top: 20px;
  }
}

.form-select {
  height: 40px;
  width: 100%;
}

.form-select .nice-select {
  border: none;
  border-radius: 0px;
  height: 40px;
  background: #f9f9ff !important;
  padding-left: 45px;
  padding-right: 40px;
  width: 100%;
}

.form-select .nice-select .list {
  margin-top: 0;
  border: none;
  border-radius: 0px;
  box-shadow: none;
  width: 100%;
  padding: 10px 0 10px 0px;
}
.mt-10{
\tmargin-top: 10px;
}
.form-select .nice-select .list .option {
  font-weight: 300;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  line-height: 28px;
  min-height: 28px;
  font-size: 12px;
  padding-left: 45px;
}

.form-select .nice-select .list .option.selected {
  color: #f8b600;
  background: transparent;
}

.form-select .nice-select .list .option:hover {
  color: #f8b600;
  background: transparent;
}

.form-select .current {
  margin-right: 50px;
  font-weight: 300;
}

.form-select .nice-select::after {
  right: 20px;
}




";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "scss/_elements.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*============== Elements Area css ================*/

.mb-20{
\tmargin-bottom: 20px;
}
.mb-30{
\tmargin-bottom: 30px;
}

.sample-text-area{
\tpadding: 100px 0px;
\t.title_color{
\t\tmargin-bottom: 30px;
\t}
\tp{
\t\tline-height: 26px;
\t\tb{
\t\t\tfont-weight: bold;
\t\t\tcolor: \$primary-color;
\t\t}
\t\ti{
\t\t\tcolor: \$primary-color;
\t\t\tfont-style: italic;
\t\t}
\t\tsup{
\t\t\tcolor: \$primary-color;
\t\t\tfont-style: italic;
\t\t}
\t\tsub{
\t\t\tcolor: \$primary-color;
\t\t\tfont-style: italic;
\t\t}
\t\tdel{
\t\t\tcolor: \$primary-color;
\t\t}
\t\tu{
\t\t\tcolor: \$primary-color;
\t\t}
\t}
}

/*============== End Elements Area css ================*/

/*==============Elements Button Area css ================*/
.elements_button{
\t.title_color{
\t\tmargin-bottom: 30px;
\t\tcolor: \$title-color;
\t}
}
.title_color{
\tcolor: \$title-color;
}
.button-group-area{
\tmargin-top: 15px;
\t&:nth-child(odd){
\t\tmargin-top: 40px;
\t}
\t&:first-child{
\t\tmargin-top: 0px;
\t}
\t.theme_btn{
\t\tmargin-right: 10px;
\t}
\t.link{
\t\ttext-decoration: underline;
\t\tcolor: \$title-color;
\t\tbackground: transparent;
\t\t&:hover{
\t\t\tcolor: #fff;
\t\t}
\t}
\t.disable{
\t\tbackground: transparent;
\t\tcolor: #007bff;
\t\tcursor: not-allowed;
\t\t&:before{
\t\t\tdisplay: none;
\t\t}
\t}
}
.primary{
\tbackground: #52c5fd;
\t&:before{
\t\tbackground: #2faae6;
\t}
}
.success{
\tbackground: #4cd3e3;
\t&:before{
\t\tbackground: #2ebccd;
\t}
}
.info{
\tbackground: #38a4ff;
\t&:before{
\t\tbackground: #298cdf;
\t}
}
.warning{
\tbackground: #f4e700;
\t&:before{
\t\tbackground: #e1d608;
\t}
}
.danger{
\tbackground: #f54940;
\t&:before{
\t\tbackground: #e13b33;
\t}
}
.border_btn{
\t
}
.primary-border{
\tbackground: transparent;
\tborder: 1px solid #52c5fd;
\tcolor: #52c5fd;
\t&:before{
\t\tbackground: #52c5fd;
\t}
}
.success-border{
\tbackground: transparent;
\tborder: 1px solid #4cd3e3;
\tcolor: #4cd3e3;
\t&:before{
\t\tbackground: #4cd3e3;
\t}
}
.info-border{
\tbackground: transparent;
\tborder: 1px solid #38a4ff;
\tcolor: #38a4ff;
\t&:before{
\t\tbackground: #38a4ff;
\t}
}
.warning-border{
\tbackground: #fff;
\tborder: 1px solid #f4e700;
\tcolor: #f4e700;
\t&:before{
\t\tbackground: #f4e700;
\t}
}
.danger-border{
\tbackground: transparent;
\tborder: 1px solid #f54940;
\tcolor: #f54940;
\t&:before{
\t\tbackground: #f54940;
\t}
}
.link-border{
\tbackground: transparent;
\tborder: 1px solid \$primary-color;
\tcolor: \$primary-color;
\t&:before{
\t\tbackground: \$primary-color;
\t}
}
.radius{
\tborder-radius: 3px;
}
.circle{
\tborder-radius: 20px;
}
.arrow{
\tspan{
\t\tpadding-left: 5px;
\t}
}
.e-large{
\tline-height: 50px;
\tpadding-top: 0px;
\tpadding-bottom: 0px;
}
.large{
\tline-height: 45px;
\tpadding-top: 0px;
\tpadding-bottom: 0px;
}
.medium{
\tline-height: 30px;
\tpadding-top: 0px;
\tpadding-bottom: 0px;
}
.small{
\tline-height: 25px;
\tpadding-top: 0px;
\tpadding-bottom: 0px;
}
.general{
\tline-height: 38px;
\tpadding-top: 0px;
\tpadding-bottom: 0px;
}
/*==============End Elements Button Area css ================*/




/* =================================== */
/*  Elements Page Styles
/* =================================== */
/*---------- Start Elements Page -------------*/
.whole-wrap {
}

.generic-banner {
  margin-top: 60px;
  text-align: center;
}

.generic-banner .height {
  height: 600px;
}

@media (max-width: 767.98px) {
  .generic-banner .height {
    height: 400px;
  }
}

.generic-banner .generic-banner-content h2 {
  line-height: 1.2em;
  margin-bottom: 20px;
}

@media (max-width: 991.98px) {
  .generic-banner .generic-banner-content h2 br {
    display: none;
  }
}

.generic-banner .generic-banner-content p {
  text-align: center;
  font-size: 16px;
}

@media (max-width: 991.98px) {
  .generic-banner .generic-banner-content p br {
    display: none;
  }
}

.generic-content h1 {
  font-weight: 600;
}

.about-generic-area {
  background: #fff;
}

.about-generic-area p {
  margin-bottom: 20px;
}

.white-bg {
  background: #fff;
}

.section-top-border {
  padding: 50px 0;
  border-top: 1px dotted #eee;
}

.switch-wrap {
  margin-bottom: 10px;
}

.switch-wrap p {
  margin: 0;
}

/*---------- End Elements Page -------------*/


.sample-text-area {
  padding: 100px 0 70px 0;
}

.sample-text {
  margin-bottom: 0;
}

.text-heading {
  margin-bottom: 30px;
  font-size: 24px;
}

.typo-list {
  margin-bottom: 10px;
}

@media (max-width: 767px) {
  .typo-sec {
    margin-bottom: 30px;
  }
}

@media (max-width: 767px) {
  .element-wrap {
    margin-top: 30px;
  }
}

b, sup, sub, u, del {
  color: #f8b600;
}

h1 {
  font-size: 36px;
}

h2 {
  font-size: 30px;
}

h3 {
  font-size: 24px;
}

h4 {
  font-size: 18px;
}

h5 {
  font-size: 16px;
}

h6 {
  font-size: 14px;
}



.typography h1, .typography h2, .typography h3, .typography h4, .typography h5, .typography h6 {
  color: #777777;
}

.button-area {
}

.button-area .border-top-generic {
  padding: 70px 15px;
  border-top: 1px dotted #eee;
}

.button-group-area .genric-btn {
  margin-right: 10px;
  margin-top: 10px;
}

.button-group-area .genric-btn:last-child {
  margin-right: 0;
}

.circle {
  border-radius: 20px;
}

.genric-btn {
  display: inline-block;
  outline: none;
  line-height: 40px;
  padding: 0 30px;
  font-size: .8em;
  text-align: center;
  text-decoration: none;
  font-weight: 500;
  cursor: pointer;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.genric-btn:focus {
  outline: none;
}

.genric-btn.e-large {
  padding: 0 40px;
  line-height: 50px;
}

.genric-btn.large {
  line-height: 45px;
}

.genric-btn.medium {
  line-height: 30px;
}

.genric-btn.small {
  line-height: 25px;
}

.genric-btn.radius {
  border-radius: 3px;
}

.genric-btn.circle {
  border-radius: 20px;
}

.genric-btn.arrow {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.genric-btn.arrow span {
  margin-left: 10px;
}

.genric-btn.default {
  color: #222222;
  background: #f9f9ff;
  border: 1px solid transparent;
}

.genric-btn.default:hover {
  border: 1px solid #f9f9ff;
  background: #fff;
}

.genric-btn.default-border {
  border: 1px solid #f9f9ff;
  background: #fff;
}

.genric-btn.default-border:hover {
  color: #222222;
  background: #f9f9ff;
  border: 1px solid transparent;
}

.genric-btn.primary {
  color: #fff;
  background: #f8b600;
  border: 1px solid transparent;
}

.genric-btn.primary:hover {
  color: #f8b600;
  border: 1px solid #f8b600;
  background: #fff;
}

.genric-btn.primary-border {
  color: #f8b600;
  border: 1px solid #f8b600;
  background: #fff;
}

.genric-btn.primary-border:hover {
  color: #fff;
  background: #f8b600;
  border: 1px solid transparent;
}

.genric-btn.success {
  color: #fff;
  background: #4cd3e3;
  border: 1px solid transparent;
}

.genric-btn.success:hover {
  color: #4cd3e3;
  border: 1px solid #4cd3e3;
  background: #fff;
}

.genric-btn.success-border {
  color: #4cd3e3;
  border: 1px solid #4cd3e3;
  background: #fff;
}

.genric-btn.success-border:hover {
  color: #fff;
  background: #4cd3e3;
  border: 1px solid transparent;
}

.genric-btn.info {
  color: #fff;
  background: #38a4ff;
  border: 1px solid transparent;
}

.genric-btn.info:hover {
  color: #38a4ff;
  border: 1px solid #38a4ff;
  background: #fff;
}

.genric-btn.info-border {
  color: #38a4ff;
  border: 1px solid #38a4ff;
  background: #fff;
}

.genric-btn.info-border:hover {
  color: #fff;
  background: #38a4ff;
  border: 1px solid transparent;
}

.genric-btn.warning {
  color: #fff;
  background: #f4e700;
  border: 1px solid transparent;
}

.genric-btn.warning:hover {
  color: #f4e700;
  border: 1px solid #f4e700;
  background: #fff;
}

.genric-btn.warning-border {
  color: #f4e700;
  border: 1px solid #f4e700;
  background: #fff;
}

.genric-btn.warning-border:hover {
  color: #fff;
  background: #f4e700;
  border: 1px solid transparent;
}

.genric-btn.danger {
  color: #fff;
  background: #f44a40;
  border: 1px solid transparent;
}

.genric-btn.danger:hover {
  color: #f44a40;
  border: 1px solid #f44a40;
  background: #fff;
}

.genric-btn.danger-border {
  color: #f44a40;
  border: 1px solid #f44a40;
  background: #fff;
}

.genric-btn.danger-border:hover {
  color: #fff;
  background: #f44a40;
  border: 1px solid transparent;
}

.genric-btn.link {
  color: #222222;
  background: #f9f9ff;
  text-decoration: underline;
  border: 1px solid transparent;
}

.genric-btn.link:hover {
  color: #222222;
  border: 1px solid #f9f9ff;
  background: #fff;
}

.genric-btn.link-border {
  color: #222222;
  border: 1px solid #f9f9ff;
  background: #fff;
  text-decoration: underline;
}

.genric-btn.link-border:hover {
  color: #222222;
  background: #f9f9ff;
  border: 1px solid transparent;
}

.genric-btn.disable {
  color: #222222, 0.3;
  background: #f9f9ff;
  border: 1px solid transparent;
  cursor: not-allowed;
}

.generic-blockquote {
  padding: 30px 50px 30px 30px;
  background: #fff;
  border-left: 2px solid #f8b600;
}

@media (max-width: 991px) {
  .progress-table-wrap {
    overflow-x: scroll;
  }
}

.progress-table {
  background: #fff;
  padding: 15px 0px 30px 0px;
  min-width: 800px;
}

.progress-table .serial {
  width: 11.83%;
  padding-left: 30px;
}

.progress-table .country {
  width: 28.07%;
}

.progress-table .visit {
  width: 19.74%;
}

.progress-table .percentage {
  width: 40.36%;
  padding-right: 50px;
}

.progress-table .table-head {
  display: flex;
}

.progress-table .table-head .serial, .progress-table .table-head .country, .progress-table .table-head .visit, .progress-table .table-head .percentage {
  color: #222222;
  line-height: 40px;
  text-transform: uppercase;
  font-weight: 500;
}

.progress-table .table-row {
  padding: 15px 0;
  border-top: 1px solid #edf3fd;
  display: flex;
}

.progress-table .table-row .serial, .progress-table .table-row .country, .progress-table .table-row .visit, .progress-table .table-row .percentage {
  display: flex;
  align-items: center;
}

.progress-table .table-row .country img {
  margin-right: 15px;
}

.progress-table .table-row .percentage .progress {
  width: 80%;
  border-radius: 0px;
  background: transparent;
}

.progress-table .table-row .percentage .progress .progress-bar {
  height: 5px;
  line-height: 5px;
}

.progress-table .table-row .percentage .progress .progress-bar.color-1 {
  background-color: #6382e6;
}

.progress-table .table-row .percentage .progress .progress-bar.color-2 {
  background-color: #e66686;
}

.progress-table .table-row .percentage .progress .progress-bar.color-3 {
  background-color: #f09359;
}

.progress-table .table-row .percentage .progress .progress-bar.color-4 {
  background-color: #73fbaf;
}

.progress-table .table-row .percentage .progress .progress-bar.color-5 {
  background-color: #73fbaf;
}

.progress-table .table-row .percentage .progress .progress-bar.color-6 {
  background-color: #6382e6;
}

.progress-table .table-row .percentage .progress .progress-bar.color-7 {
  background-color: #a367e7;
}

.progress-table .table-row .percentage .progress .progress-bar.color-8 {
  background-color: #e66686;
}

.single-gallery-image {
  margin-top: 30px;
  background-repeat: no-repeat !important;
  background-position: center center !important;
  background-size: cover !important;
  height: 200px;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.single-gallery-image:hover {
  opacity: .8;
}

.list-style {
  width: 14px;
  height: 14px;
}

.unordered-list li {
  position: relative;
  padding-left: 30px;
  line-height: 1.82em !important;
}

.unordered-list li:before {
  content: \"\";
  position: absolute;
  width: 14px;
  height: 14px;
  border: 3px solid #f8b600;
  background: #fff;
  top: 4px;
  left: 0;
  border-radius: 50%;
}

.ordered-list {
  margin-left: 30px;
}

.ordered-list li {
  list-style-type: decimal-leading-zero;
  color: #f8b600;
  font-weight: 500;
  line-height: 1.82em !important;
}

.ordered-list li span {
  font-weight: 300;
  color: #777777;
}

.ordered-list-alpha li {
  margin-left: 30px;
  list-style-type: lower-alpha;
  color: #f8b600;
  font-weight: 500;
  line-height: 1.82em !important;
}

.ordered-list-alpha li span {
  font-weight: 300;
  color: #777777;
}

.ordered-list-roman li {
  margin-left: 30px;
  list-style-type: lower-roman;
  color: #f8b600;
  font-weight: 500;
  line-height: 1.82em !important;
}

.ordered-list-roman li span {
  font-weight: 300;
  color: #777777;
}

.single-input {
  display: block;
  width: 100%;
  line-height: 40px;
  border: none;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
}

.single-input:focus {
  outline: none;
}

.input-group-icon {
  position: relative;
}

.input-group-icon .icon {
  position: absolute;
  left: 20px;
  top: 0;
  line-height: 40px;
  z-index: 3;
}

.input-group-icon .icon i {
  color: #797979;
}

.input-group-icon .single-input {
  padding-left: 45px;
}

.single-textarea {
  display: block;
  width: 100%;
  line-height: 40px;
  border: none;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
  height: 100px;
  resize: none;
}

.single-textarea:focus {
  outline: none;
}

.single-input-primary {
  display: block;
  width: 100%;
  line-height: 40px;
  border: 1px solid transparent;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
}

.single-input-primary:focus {
  outline: none;
  border: 1px solid #f8b600;
}

.single-input-accent {
  display: block;
  width: 100%;
  line-height: 40px;
  border: 1px solid transparent;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
}

.single-input-accent:focus {
  outline: none;
  border: 1px solid #eb6b55;
}

.single-input-secondary {
  display: block;
  width: 100%;
  line-height: 40px;
  border: 1px solid transparent;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
}

.single-input-secondary:focus {
  outline: none;
  border: 1px solid #f09359;
}

.default-switch {
  width: 35px;
  height: 17px;
  border-radius: 8.5px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.default-switch input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  cursor: pointer;
}

.default-switch input + label {
  position: absolute;
  top: 1px;
  left: 1px;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #f8b600;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}

.default-switch input:checked + label {
  left: 19px;
}

.single-element-widget {
  margin-bottom: 30px;
}

.primary-switch {
  width: 35px;
  height: 17px;
  border-radius: 8.5px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.primary-switch input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.primary-switch input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
}

.primary-switch input + label:before {
  content: \"\";
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background: transparent;
  border-radius: 8.5px;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
}

.primary-switch input + label:after {
  content: \"\";
  position: absolute;
  top: 1px;
  left: 1px;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #fff;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}

.primary-switch input:checked + label:after {
  left: 19px;
}

.primary-switch input:checked + label:before {
  background: #f8b600;
}

.confirm-switch {
  width: 35px;
  height: 17px;
  border-radius: 8.5px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.confirm-switch input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.confirm-switch input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
}

.confirm-switch input + label:before {
  content: \"\";
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background: transparent;
  border-radius: 8.5px;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  cursor: pointer;
}

.confirm-switch input + label:after {
  content: \"\";
  position: absolute;
  top: 1px;
  left: 1px;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #fff;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}

.confirm-switch input:checked + label:after {
  left: 19px;
}

.confirm-switch input:checked + label:before {
  background: #4cd3e3;
}

.primary-checkbox {
  width: 16px;
  height: 16px;
  border-radius: 3px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.primary-checkbox input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.primary-checkbox input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 3px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}
.single-defination{
\th4{
\t\tcolor: \$title-color;
\t}
}

.primary-checkbox input:checked + label {
  background: url(../img/elements/primary-check.png) no-repeat center center/cover;
  border: none;
}

.confirm-checkbox {
  width: 16px;
  height: 16px;
  border-radius: 3px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.confirm-checkbox input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.confirm-checkbox input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 3px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.confirm-checkbox input:checked + label {
  background: url(../img/elements/success-check.png) no-repeat center center/cover;
  border: none;
}

.disabled-checkbox {
  width: 16px;
  height: 16px;
  border-radius: 3px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.disabled-checkbox input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.disabled-checkbox input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 3px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.disabled-checkbox input:disabled {
  cursor: not-allowed;
  z-index: 3;
}

.disabled-checkbox input:checked + label {
  background: url(../img/elements/disabled-check.png) no-repeat center center/cover;
  border: none;
}

.primary-radio {
  width: 16px;
  height: 16px;
  border-radius: 8px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.primary-radio input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.primary-radio input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 8px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.primary-radio input:checked + label {
  background: url(../img/elements/primary-radio.png) no-repeat center center/cover;
  border: none;
}

.confirm-radio {
  width: 16px;
  height: 16px;
  border-radius: 8px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.confirm-radio input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.confirm-radio input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 8px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.confirm-radio input:checked + label {
  background: url(../img/elements/success-radio.png) no-repeat center center/cover;
  border: none;
}

.disabled-radio {
  width: 16px;
  height: 16px;
  border-radius: 8px;
  background: #fff;
  position: relative;
  cursor: pointer;
}

.disabled-radio input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.disabled-radio input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 8px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.disabled-radio input:disabled {
  cursor: not-allowed;
  z-index: 3;
}
.unordered-list{
\tlist-style: none;
\tpadding: 0px;
\tmargin: 0px;
}
.ordered-list{
\tlist-style: none;
\tpadding: 0px;
}
.disabled-radio input:checked + label {
  background: url(../img/elements/disabled-radio.png) no-repeat center center/cover;
  border: none;
}

.default-select {
  height: 40px;
}

.default-select .nice-select {
  border: none;
  border-radius: 0px;
  height: 40px;
  background: #fff;
  padding-left: 20px;
  padding-right: 40px;
}

.default-select .nice-select .list {
  margin-top: 0;
  border: none;
  border-radius: 0px;
  box-shadow: none;
  width: 100%;
  padding: 10px 0 10px 0px;
}

.default-select .nice-select .list .option {
  font-weight: 300;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  line-height: 28px;
  min-height: 28px;
  font-size: 12px;
  padding-left: 20px;
}

.default-select .nice-select .list .option.selected {
  color: #f8b600;
  background: transparent;
}

.default-select .nice-select .list .option:hover {
  color: #f8b600;
  background: transparent;
}

.default-select .current {
  margin-right: 50px;
  font-weight: 300;
}

.default-select .nice-select::after {
  right: 20px;
}

@media (max-width: 991px) {
  .left-align-p p {
    margin-top: 20px;
  }
}

.form-select {
  height: 40px;
  width: 100%;
}

.form-select .nice-select {
  border: none;
  border-radius: 0px;
  height: 40px;
  background: #f9f9ff !important;
  padding-left: 45px;
  padding-right: 40px;
  width: 100%;
}

.form-select .nice-select .list {
  margin-top: 0;
  border: none;
  border-radius: 0px;
  box-shadow: none;
  width: 100%;
  padding: 10px 0 10px 0px;
}
.mt-10{
\tmargin-top: 10px;
}
.form-select .nice-select .list .option {
  font-weight: 300;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  line-height: 28px;
  min-height: 28px;
  font-size: 12px;
  padding-left: 45px;
}

.form-select .nice-select .list .option.selected {
  color: #f8b600;
  background: transparent;
}

.form-select .nice-select .list .option:hover {
  color: #f8b600;
  background: transparent;
}

.form-select .current {
  margin-right: 50px;
  font-weight: 300;
}

.form-select .nice-select::after {
  right: 20px;
}




", "scss/_elements.scss", "C:\\xampp\\htdocs\\PIDEV\\templates\\scss\\_elements.scss");
    }
}
