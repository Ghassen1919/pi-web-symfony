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

/* user/layout.html.twig */
class __TwigTemplate_07437c150dc85310df391c7c9fdb8b8c1de366157adce08e1ab09db9f46e2556 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title_h1' => [$this, 'block_title_h1'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<!-- Required meta tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" href=";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/a.png"), "html", null, true);
        echo " type=\"image/png\">
\t<title>Hunters</title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "</head>
<body>         

<header class=\"header_area\">
\t\t<div class=\"main_menu\">
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t<a class=\"navbar-brand logo_h\" href=";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/r"), "html", null, true);
        echo "><img src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/a.png"), "html", null, true);
        echo " width=75px></a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\t\t\t aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t<div class=\"collapse navbar-collapse offset\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav menu_nav justify-content-center\">
                       
\t\t\t\t\t\t\t<li class=\"nav-item \"><a class=\"nav-link\" href=";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/r"), "html", null, true);
        echo ">Home</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("about-us.html"), "html", null, true);
        echo ">About</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/post/front"), "html", null, true);
        echo ">News</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.php/reclamation/new"), "html", null, true);
        echo ">Reclamation</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact.html"), "html", null, true);
        echo ">Contact</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">                                                                                                        </a></li>
\t\t\t\t\t\t                                                                                                      </a></li><li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">                                                                                                        </a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t <li class=\"nav-item dropdown no-arrow\">
            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "fullName", [], "any", false, false, false, 65), "html", null, true);
        echo "</span>
                ";
        // line 67
        echo "            </a>
            <!-- Dropdown - User Information -->
            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                <a class=\"dropdown-item\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_account_index");
        echo "\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profil
                </a>
                <a class=\"dropdown-item\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_parameter_index");
        echo "\">
                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Paramètres
                </a>
                ";
        // line 82
        echo "                
                <a class=\"dropdown-item\"   href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Déconnexion
                </a>
            </div>
        </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t</header>
\t

\t\t
            
<div id=\"wrapper\">
            
            ";
        // line 102
        $this->loadTemplate("user/partials/sidebar.html.twig", "user/layout.html.twig", 102)->display($context);
        // line 103
        echo "           
            <div id=\"content-wrapper\" class=\"d-flex flex-column\">

                <div id=\"content\">

                    ";
        // line 108
        $this->loadTemplate("admin/partials/topbar.html.twig", "user/layout.html.twig", 108)->display($context);
        // line 109
        echo "                    
                    <div class=\"container-fluid\">

                        <h1 class=\"h3 mb-0 text-gray-800\">";
        // line 112
        $this->displayBlock('title_h1', $context, $blocks);
        echo "</h1>
                        ";
        // line 114
        echo "
                        ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "flashes", [], "any", false, false, false, 115));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 116
            echo "                            <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo " mt-3\">
                                ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 118
                echo "                                    <p>";
                echo $context["message"];
                echo "</p>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "
                        ";
        // line 123
        $this->displayBlock('body', $context, $blocks);
        // line 124
        echo "
                    </div>

                </div>

                <footer class=\"sticky-footer bg-white\">
                    <div class=\"container my-auto\">
                        <div class=\"copyright text-center my-auto\">
                            <span>Copyright &copy; Symfony4 - Starter 2019</span>
                        </div>
                    </div>
                </footer>

            </div>

        </div>


        ";
        // line 142
        $this->loadTemplate("user/partials/_modal_logout.html.twig", "user/layout.html.twig", 142)->display($context);
        // line 143
        echo "<script>
    var botmanWidget = {
        frameEndpoint: '";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_frame");
        echo "',
        chatServer: '";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_message");
        echo "',
        introMessage: 'Hello, I am a Chatbot',
        title: 'My Chatbot',
        mainColor: '#f59e08',
        color: '#ffffff',
        bubbleBackground: '#e39206',
        aboutText: ''
    };
</script>
  
        ";
        // line 156
        $this->displayBlock('javascripts', $context, $blocks);
        // line 185
        echo "
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/linericon/style.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl-carousel/owl.carousel.min.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nice-select/css/nice-select.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/animate-css/animate.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/flaticon/flaticon.css"), "html", null, true);
        echo "\"/>
\t<!-- main css -->
<link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900\" rel=\"stylesheet\">
\t\t
\t\t
\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
      
       <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_title_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_h1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_h1"));

        echo "Non défini";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 123
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 156
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 157
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/stellar.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nice-select/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/isotope/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/isotope/isotope-min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter-up/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/counter-up/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
\t<!--gmaps Js-->
\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE\"></script>
\t<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/gmaps.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/theme.js"), "html", null, true);
        echo "\"></script>
 <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        <!-- Core plugin JavaScript-->
        <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
        <!-- Custom scripts for all pages-->
        <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 183,  480 => 180,  475 => 178,  471 => 177,  467 => 176,  463 => 175,  458 => 173,  454 => 172,  450 => 171,  444 => 168,  440 => 167,  436 => 166,  432 => 165,  428 => 164,  424 => 163,  420 => 162,  416 => 161,  412 => 160,  408 => 159,  404 => 158,  399 => 157,  389 => 156,  371 => 123,  352 => 112,  340 => 27,  335 => 25,  330 => 23,  322 => 18,  318 => 17,  314 => 16,  310 => 15,  306 => 14,  302 => 13,  298 => 12,  293 => 11,  283 => 10,  271 => 185,  269 => 156,  256 => 146,  252 => 145,  248 => 143,  246 => 142,  226 => 124,  224 => 123,  221 => 122,  214 => 120,  205 => 118,  201 => 117,  196 => 116,  192 => 115,  189 => 114,  185 => 112,  180 => 109,  178 => 108,  171 => 103,  169 => 102,  147 => 83,  144 => 82,  137 => 74,  130 => 70,  125 => 67,  121 => 65,  107 => 54,  101 => 51,  97 => 50,  93 => 49,  89 => 48,  73 => 37,  63 => 29,  61 => 10,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<!-- Required meta tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" href={{asset(\"img/a.png\")}} type=\"image/png\">
\t<title>Hunters</title>
        {% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.css')}}\"/>
\t<link rel=\"stylesheet\" href=\"{{asset('vendors/linericon/style.css')}}\"/>
\t<link rel=\"stylesheet\" href=\"{{asset('css/font-awesome.min.css')}}\"/>
\t<link rel=\"stylesheet\" href=\"{{asset('vendors/owl-carousel/owl.carousel.min.css')}}\"/>
\t<link rel=\"stylesheet\" href=\"{{asset('css/magnific-popup.css')}}\"/>
\t<link rel=\"stylesheet\" href=\"{{asset('vendors/nice-select/css/nice-select.css')}}\"/>
\t<link rel=\"stylesheet\" href=\"{{asset('vendors/animate-css/animate.css')}}\"/>
\t<link rel=\"stylesheet\" href=\"{{asset('vendors/flaticon/flaticon.css')}}\"/>
\t<!-- main css -->
<link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900\" rel=\"stylesheet\">
\t\t
\t\t
\t<link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\"/>
      
       <link href=\"{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
        <link href=\"{{ asset('sbadmin2/css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
{% endblock %}
</head>
<body>         

<header class=\"header_area\">
\t\t<div class=\"main_menu\">
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t<a class=\"navbar-brand logo_h\" href={{asset(\"index.php/r\")}}><img src={{asset(\"img/a.png\")}} width=75px></a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\t\t\t aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t<div class=\"collapse navbar-collapse offset\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav menu_nav justify-content-center\">
                       
\t\t\t\t\t\t\t<li class=\"nav-item \"><a class=\"nav-link\" href={{asset(\"index.php/r\")}}>Home</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href={{asset(\"about-us.html\")}}>About</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href={{asset(\"index.php/post/front\")}}>News</a></li>
\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href={{asset(\"index.php/reclamation/new\")}}>Reclamation</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href={{asset(\"contact.html\")}}>Contact</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">                                                                                                        </a></li>
\t\t\t\t\t\t                                                                                                      </a></li><li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">                                                                                                        </a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t <li class=\"nav-item dropdown no-arrow\">
            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>{{ app.user.fullName }}</span>
                {# <img class=\"img-profile rounded-circle\" src=\"https://source.unsplash.com/QAB-WJcbgJk/60x60\"> #}
            </a>
            <!-- Dropdown - User Information -->
            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                <a class=\"dropdown-item\" href=\"{{ path('user_account_index') }}\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profil
                </a>
                <a class=\"dropdown-item\" href=\"{{ path('user_parameter_index') }}\">
                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Paramètres
                </a>
                {# <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Activity Log
                </a> #}
                
                <a class=\"dropdown-item\"   href=\"{{ path('login') }}\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Déconnexion
                </a>
            </div>
        </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t</header>
\t

\t\t
            
<div id=\"wrapper\">
            
            {% include \"user/partials/sidebar.html.twig\" %}
           
            <div id=\"content-wrapper\" class=\"d-flex flex-column\">

                <div id=\"content\">

                    {% include \"admin/partials/topbar.html.twig\" %}
                    
                    <div class=\"container-fluid\">

                        <h1 class=\"h3 mb-0 text-gray-800\">{% block title_h1 %}Non défini{% endblock %}</h1>
                        {# <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a> #}

                        {% for label, messages in app.flashes %}
                            <div class=\"alert alert-{{ label }} mt-3\">
                                {% for message in messages %}
                                    <p>{{ message | raw }}</p>
                                {% endfor %}
                            </div>
                        {% endfor %}

                        {% block body %}{% endblock %}

                    </div>

                </div>

                <footer class=\"sticky-footer bg-white\">
                    <div class=\"container my-auto\">
                        <div class=\"copyright text-center my-auto\">
                            <span>Copyright &copy; Symfony4 - Starter 2019</span>
                        </div>
                    </div>
                </footer>

            </div>

        </div>


        {% include \"user/partials/_modal_logout.html.twig\" %}
<script>
    var botmanWidget = {
        frameEndpoint: '{{ path(\"chat_frame\") }}',
        chatServer: '{{ path(\"chat_message\") }}',
        introMessage: 'Hello, I am a Chatbot',
        title: 'My Chatbot',
        mainColor: '#f59e08',
        color: '#ffffff',
        bubbleBackground: '#e39206',
        aboutText: ''
    };
</script>
  
        {% block javascripts %}
\t<script src=\"{{ asset('js/popper.js')}}\"></script>
\t<script src=\"{{ asset('js/bootstrap.min.js')}}\"></script>
\t<script src=\"{{ asset('js/stellar.js')}}\"></script>
\t<script src=\"{{ asset('js/jquery.magnific-popup.min.js')}}\"></script>
\t<script src=\"{{ asset('vendors/nice-select/js/jquery.nice-select.min.js')}}\"></script>
\t<script src=\"{{ asset('vendors/isotope/imagesloaded.pkgd.min.js')}}\"></script>
\t<script src=\"{{ asset('vendors/isotope/isotope-min.js')}}\"></script>
\t<script src=\"{{ asset('vendors/owl-carousel/owl.carousel.min.js')}}\"></script>
\t<script src=\"{{ asset('js/jquery.ajaxchimp.min.js')}}\"></script>
\t<script src=\"{{ asset('vendors/counter-up/jquery.waypoints.min.js')}}\"></script>
\t<script src=\"{{ asset('vendors/counter-up/jquery.counterup.min.js')}}\"></script>
\t<script src=\"{{ asset('js/mail-script.js')}}\"></script>
\t<!--gmaps Js-->
\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE\"></script>
\t<script src=\"{{ asset('js/gmaps.min.js')}}\"></script>
\t<script src=\"{{ asset('js/theme.js')}}\"></script>
 <script src=\"{{ asset('sbadmin2/vendor/jquery-easing/jquery.easing.min.js') }}\"></script>

<script src=\"{{ asset('sbadmin2/vendor/jquery/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
      <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
      <script src=\"{{ asset('js/main.js') }}\"></script>
        <!-- Core plugin JavaScript-->
        <script src=\"{{ asset('sbadmin2/vendor/jquery-easing/jquery.easing.min.js') }}\"></script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
        <!-- Custom scripts for all pages-->
        <script src=\"{{ asset('sbadmin2/js/sb-admin-2.min.js') }}\"></script>
{% endblock %}

    </body>
</html>", "user/layout.html.twig", "C:\\xampp\\htdocs\\PIDEV\\templates\\user\\layout.html.twig");
    }
}
