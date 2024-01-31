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

/* cv/index.html.twig */
class __TwigTemplate_ba785f932853203873ddc296d9729584 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cv/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello CvController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<link rel=\"stylesheet\" href=\"https://bootswatch.com/5/cerulean/bootstrap.min.css\">
<nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"#\">Laimene Rayane</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"home\">Home
            <span class=\"visually-hidden\">(current)</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"cv\">CV</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"portfolio\">Portfolio</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"plus\">En Savoir Plus</a>
        </li> 
    </div>
  </div>
</nav>
<!--Hey! This is the original version
of Simple CSS Waves-->

<div class=\"header\">

<!--Content before waves-->
<div class=\"inner-header flex\">
<!--Just the logo.. Don't mind this-->
<svg version=\"1.1\" class=\"logo\" baseProfile=\"tiny\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\"
xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 500 500\" xml:space=\"preserve\">
<path fill=\"#FFFFFF\" stroke=\"#000000\" stroke-width=\"10\" stroke-miterlimit=\"10\" d=\"M57,283\" />
<g><path fill=\"#fff\"
d=\"M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7      c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2    c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z\" />
</g>
</svg>
<h1> Voici mon CV </h1>
</div>
<script src=\"https://kit.fontawesome.com/b99e675b6e.js\"></script>

<div class=\"resume\">
   <div class=\"resume_left\">

     <div class=\"resume_content\">
       <div class=\"resume_item resume_info\">
         <div class=\"title\">
           <p class=\"bold\">Laimene Rayane</p>
           <p class=\"regular\">étudiant</p>
         </div>
         <ul>
           <li>
             <div class=\"icon\">
               <i class=\"fas fa-map-signs\"></i>
             </div>
             <div class=\"data\">
               France, Rhône-Alpes <br /> 
             </div>
           </li>
           <li>
             <div class=\"icon\">
               <i class=\"fas fa-mobile-alt\"></i>
             </div>
             <div class=\"data\">
               +33 6 76 82 55 58
             </div>
           </li>
           <li>
             <div class=\"icon\">
               <i class=\"fas fa-envelope\"></i>
             </div>
             <div class=\"data\">
               laimene@gmail.com
             </div>
           </li>
           <li>
             <div class=\"icon\">
               <i class=\"fab fa-weebly\"></i>
             </div>
             <div class=\"data\">
               @Kbdv 
             </div>
           </li>
         </ul>
       </div>
       <div class=\"resume_item resume_skills\">
         <div class=\"title\">
           <p class=\"bold\">skill's</p>
         </div>
         <ul>
           <li>
             <div class=\"skill_name\">
               HTML
             </div>
             <div class=\"skill_progress\">
               <span style=\"width: 80%;\"></span>
             </div>
             <div class=\"skill_per\">80%</div>
           </li>
           <li>
             <div class=\"skill_name\">
               CSS
             </div>
             <div class=\"skill_progress\">
               <span style=\"width: 70%;\"></span>
             </div>
             <div class=\"skill_per\">70%</div>
           </li>
           <li>
             <div class=\"skill_name\">
               SASS
             </div>
             <div class=\"skill_progress\">
               <span style=\"width: 90%;\"></span>
             </div>
             <div class=\"skill_per\">90%</div>
           </li>
           <li>
             <div class=\"skill_name\">
               JS
             </div>
             <div class=\"skill_progress\">
               <span style=\"width: 60%;\"></span>
             </div>
             <div class=\"skill_per\">60%</div>
           </li>
           <li>
             <div class=\"skill_name\">
             </div>
             <div class=\"skill_progress\">
               <span style=\"width: 88%;\"></span>
             </div>
             <div class=\"skill_per\">88%</div>
           </li>
         </ul>
       </div>
       <div class=\"resume_item resume_social\">
         <div class=\"title\">
           <p class=\"bold\">Social</p>
         </div>
         <ul>
           <li>
             <div class=\"icon\">
               <i class=\"fab fa-facebook-square\"></i>
             </div>
             <div class=\"data\">
               <p class=\"semi-bold\">Facebook</p>
               <p></p>
             </div>
           </li>
           <li>
             <div class=\"icon\">
               <i class=\"fab fa-twitter-square\"></i>
             </div>
             <div class=\"data\">
               <p class=\"semi-bold\">Twitter</p>
               <p></p>
             </div>
           </li>
           <li>
             <div class=\"icon\">
               <i class=\"fab fa-youtube\"></i>
             </div>
             <div class=\"data\">
               <p class=\"semi-bold\">Youtube</p>
               <p></p>
             </div>
           </li>
           <li>
             <div class=\"icon\">
               <i class=\"fab fa-linkedin\"></i>
             </div>
             <div class=\"data\">
               <p class=\"semi-bold\">Linkedin</p>
               <p></p>
             </div>
           </li>
         </ul>
       </div>
     </div>
  </div>
  <div class=\"resume_right\">
    <div class=\"resume_item resume_about\">
        <div class=\"title\">
           <p class=\"bold\">à propos </p>
         </div>
        <p>Fort de mes précédentes expériences professionnelles dans le domaine de la vente, j’ai pu gagner en maturité et développer de solides compétences malgré mon jeune âge.
Organisé et rigoureux, je mettrai ma polyvalence et mon écoute au service de la clientèle.</p>
    </div>
    <div class=\"resume_item resume_work\">
        <div class=\"title\">
           <p class=\"bold\">Work Experience</p>
         </div>
        <ul>
            <li>
                <div class=\"date\">2013 - 2015</div> 
                <div class=\"info\">
                     <p class=\"semi-bold\">Lorem ipsum dolor sit amet.</p> 
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                </div>
            </li>
            <li>
              <div class=\"date\">2015 - 2017</div>
              <div class=\"info\">
                     <p class=\"semi-bold\">Lorem ipsum dolor sit amet.</p> 
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                </div>
            </li>
            <li>
              <div class=\"date\">2017 - Present</div>
              <div class=\"info\">
                     <p class=\"semi-bold\">Lorem ipsum dolor sit amet.</p> 
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                </div>
            </li>
        </ul>
    </div>
    <div class=\"resume_item resume_education\">
      <div class=\"title\">
           <p class=\"bold\">Education</p>
         </div>
      <ul>
            <li>
                <div class=\"date\">2010 - 2013</div> 
                <div class=\"info\">
                     <p class=\"semi-bold\">Web Designing (Texas University)</p> 
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                </div>
            </li>
            <li>
              <div class=\"date\">2000 - 2010</div>
              <div class=\"info\">
                     <p class=\"semi-bold\">Texas International School</p> 
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                </div>
            </li>
        </ul>
    </div>
    <div class=\"resume_item resume_hobby\">
      <div class=\"title\">
           <p class=\"bold\">Hobby</p>
         </div>
       <ul>
         <li><i class=\"fas fa-book\"></i></li>
         <li><i class=\"fas fa-gamepad\"></i></li>
         <li><i class=\"fas fa-music\"></i></li>
         <li><i class=\"fab fa-pagelines\"></i></li>
      </ul>
    </div>
  </div>
</div>
<!--Waves Container-->
<div>
<svg class=\"waves\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
viewBox=\"0 24 150 28\" preserveAspectRatio=\"none\" shape-rendering=\"auto\">
<defs>
<path id=\"gentle-wave\" d=\"M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z\" />
</defs>
<g class=\"parallax\">
<use xlink:href=\"#gentle-wave\" x=\"48\" y=\"0\" fill=\"rgba(255,255,255,0.7\" />
<use xlink:href=\"#gentle-wave\" x=\"48\" y=\"3\" fill=\"rgba(255,255,255,0.5)\" />
<use xlink:href=\"#gentle-wave\" x=\"48\" y=\"5\" fill=\"rgba(255,255,255,0.3)\" />
<use xlink:href=\"#gentle-wave\" x=\"48\" y=\"7\" fill=\"#fff\" />
</g>
</svg>
</div>
<!--Waves end-->

</div>
<!--Header ends-->

<!--Content starts-->
<div class=\"content flex\">
  <p>GROUPE A2 | BUT RT1 </p>
</div>
<!--Content ends-->
<a href=\"cv.png\" download=\"cv.png\"class=\"button\">Download</a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cv/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CvController!{% endblock %}

{% block body %}

<link rel=\"stylesheet\" href=\"https://bootswatch.com/5/cerulean/bootstrap.min.css\">
<nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"#\">Laimene Rayane</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"home\">Home
            <span class=\"visually-hidden\">(current)</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"cv\">CV</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"portfolio\">Portfolio</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"plus\">En Savoir Plus</a>
        </li> 
    </div>
  </div>
</nav>
<!--Hey! This is the original version
of Simple CSS Waves-->

<div class=\"header\">

<!--Content before waves-->
<div class=\"inner-header flex\">
<!--Just the logo.. Don't mind this-->
<svg version=\"1.1\" class=\"logo\" baseProfile=\"tiny\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\"
xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 500 500\" xml:space=\"preserve\">
<path fill=\"#FFFFFF\" stroke=\"#000000\" stroke-width=\"10\" stroke-miterlimit=\"10\" d=\"M57,283\" />
<g><path fill=\"#fff\"
d=\"M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7      c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2    c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z\" />
</g>
</svg>
<h1> Voici mon CV </h1>
</div>
<script src=\"https://kit.fontawesome.com/b99e675b6e.js\"></script>

<div class=\"resume\">
   <div class=\"resume_left\">

     <div class=\"resume_content\">
       <div class=\"resume_item resume_info\">
         <div class=\"title\">
           <p class=\"bold\">Laimene Rayane</p>
           <p class=\"regular\">étudiant</p>
         </div>
         <ul>
           <li>
             <div class=\"icon\">
               <i class=\"fas fa-map-signs\"></i>
             </div>
             <div class=\"data\">
               France, Rhône-Alpes <br /> 
             </div>
           </li>
           <li>
             <div class=\"icon\">
               <i class=\"fas fa-mobile-alt\"></i>
             </div>
             <div class=\"data\">
               +33 6 76 82 55 58
             </div>
           </li>
           <li>
             <div class=\"icon\">
               <i class=\"fas fa-envelope\"></i>
             </div>
             <div class=\"data\">
               laimene@gmail.com
             </div>
           </li>
           <li>
             <div class=\"icon\">
               <i class=\"fab fa-weebly\"></i>
             </div>
             <div class=\"data\">
               @Kbdv 
             </div>
           </li>
         </ul>
       </div>
       <div class=\"resume_item resume_skills\">
         <div class=\"title\">
           <p class=\"bold\">skill's</p>
         </div>
         <ul>
           <li>
             <div class=\"skill_name\">
               HTML
             </div>
             <div class=\"skill_progress\">
               <span style=\"width: 80%;\"></span>
             </div>
             <div class=\"skill_per\">80%</div>
           </li>
           <li>
             <div class=\"skill_name\">
               CSS
             </div>
             <div class=\"skill_progress\">
               <span style=\"width: 70%;\"></span>
             </div>
             <div class=\"skill_per\">70%</div>
           </li>
           <li>
             <div class=\"skill_name\">
               SASS
             </div>
             <div class=\"skill_progress\">
               <span style=\"width: 90%;\"></span>
             </div>
             <div class=\"skill_per\">90%</div>
           </li>
           <li>
             <div class=\"skill_name\">
               JS
             </div>
             <div class=\"skill_progress\">
               <span style=\"width: 60%;\"></span>
             </div>
             <div class=\"skill_per\">60%</div>
           </li>
           <li>
             <div class=\"skill_name\">
             </div>
             <div class=\"skill_progress\">
               <span style=\"width: 88%;\"></span>
             </div>
             <div class=\"skill_per\">88%</div>
           </li>
         </ul>
       </div>
       <div class=\"resume_item resume_social\">
         <div class=\"title\">
           <p class=\"bold\">Social</p>
         </div>
         <ul>
           <li>
             <div class=\"icon\">
               <i class=\"fab fa-facebook-square\"></i>
             </div>
             <div class=\"data\">
               <p class=\"semi-bold\">Facebook</p>
               <p></p>
             </div>
           </li>
           <li>
             <div class=\"icon\">
               <i class=\"fab fa-twitter-square\"></i>
             </div>
             <div class=\"data\">
               <p class=\"semi-bold\">Twitter</p>
               <p></p>
             </div>
           </li>
           <li>
             <div class=\"icon\">
               <i class=\"fab fa-youtube\"></i>
             </div>
             <div class=\"data\">
               <p class=\"semi-bold\">Youtube</p>
               <p></p>
             </div>
           </li>
           <li>
             <div class=\"icon\">
               <i class=\"fab fa-linkedin\"></i>
             </div>
             <div class=\"data\">
               <p class=\"semi-bold\">Linkedin</p>
               <p></p>
             </div>
           </li>
         </ul>
       </div>
     </div>
  </div>
  <div class=\"resume_right\">
    <div class=\"resume_item resume_about\">
        <div class=\"title\">
           <p class=\"bold\">à propos </p>
         </div>
        <p>Fort de mes précédentes expériences professionnelles dans le domaine de la vente, j’ai pu gagner en maturité et développer de solides compétences malgré mon jeune âge.
Organisé et rigoureux, je mettrai ma polyvalence et mon écoute au service de la clientèle.</p>
    </div>
    <div class=\"resume_item resume_work\">
        <div class=\"title\">
           <p class=\"bold\">Work Experience</p>
         </div>
        <ul>
            <li>
                <div class=\"date\">2013 - 2015</div> 
                <div class=\"info\">
                     <p class=\"semi-bold\">Lorem ipsum dolor sit amet.</p> 
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                </div>
            </li>
            <li>
              <div class=\"date\">2015 - 2017</div>
              <div class=\"info\">
                     <p class=\"semi-bold\">Lorem ipsum dolor sit amet.</p> 
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                </div>
            </li>
            <li>
              <div class=\"date\">2017 - Present</div>
              <div class=\"info\">
                     <p class=\"semi-bold\">Lorem ipsum dolor sit amet.</p> 
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                </div>
            </li>
        </ul>
    </div>
    <div class=\"resume_item resume_education\">
      <div class=\"title\">
           <p class=\"bold\">Education</p>
         </div>
      <ul>
            <li>
                <div class=\"date\">2010 - 2013</div> 
                <div class=\"info\">
                     <p class=\"semi-bold\">Web Designing (Texas University)</p> 
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                </div>
            </li>
            <li>
              <div class=\"date\">2000 - 2010</div>
              <div class=\"info\">
                     <p class=\"semi-bold\">Texas International School</p> 
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                </div>
            </li>
        </ul>
    </div>
    <div class=\"resume_item resume_hobby\">
      <div class=\"title\">
           <p class=\"bold\">Hobby</p>
         </div>
       <ul>
         <li><i class=\"fas fa-book\"></i></li>
         <li><i class=\"fas fa-gamepad\"></i></li>
         <li><i class=\"fas fa-music\"></i></li>
         <li><i class=\"fab fa-pagelines\"></i></li>
      </ul>
    </div>
  </div>
</div>
<!--Waves Container-->
<div>
<svg class=\"waves\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
viewBox=\"0 24 150 28\" preserveAspectRatio=\"none\" shape-rendering=\"auto\">
<defs>
<path id=\"gentle-wave\" d=\"M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z\" />
</defs>
<g class=\"parallax\">
<use xlink:href=\"#gentle-wave\" x=\"48\" y=\"0\" fill=\"rgba(255,255,255,0.7\" />
<use xlink:href=\"#gentle-wave\" x=\"48\" y=\"3\" fill=\"rgba(255,255,255,0.5)\" />
<use xlink:href=\"#gentle-wave\" x=\"48\" y=\"5\" fill=\"rgba(255,255,255,0.3)\" />
<use xlink:href=\"#gentle-wave\" x=\"48\" y=\"7\" fill=\"#fff\" />
</g>
</svg>
</div>
<!--Waves end-->

</div>
<!--Header ends-->

<!--Content starts-->
<div class=\"content flex\">
  <p>GROUPE A2 | BUT RT1 </p>
</div>
<!--Content ends-->
<a href=\"cv.png\" download=\"cv.png\"class=\"button\">Download</a>

{% endblock %}
", "cv/index.html.twig", "C:\\Users\\nellg\\SAE-SYMFONY\\templates\\cv\\index.html.twig");
    }
}
