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

/* plus/index.html.twig */
class __TwigTemplate_39329aa5ea837ff97c6281c35fd7a609 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plus/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plus/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "plus/index.html.twig", 1);
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

        echo "Hello PlusController!";
        
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
        echo "<link rel=\"stylesheet\" href=\"https://bootswatch.com/5/cerulean/bootstrap.min.css\">
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
<h1>Voici quelque unes de mes passions je les pratiques dans ma vie perso ! </h1>

</div>
<link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\">

<section class=\"hero-section\">
  <div class=\"card-grid\">
    <a class=\"card\" href=\"#\">
      <div class=\"card__background\" style=\"background-image: url(https://imgs.search.brave.com/ApRoSCCJ_DcwQCvhYtQiX14fPDCjBJaNiro_nIkjqkg/rs:fit:500:0:0/g:ce/aHR0cHM6Ly91cGxv/YWQud2lraW1lZGlh/Lm9yZy93aWtpcGVk/aWEvY29tbW9ucy9m/L2YyL0pPX0F0bGFu/dGFfMTk5Nl8tX0Jv/eGUuanBn)\"></div>
      <div class=\"card__content\">
        <p class=\"card__category\">La Boxe</p>
        <h3 class=\"card__heading\">Je Pratique la boxe</h3>
      </div>
    </a>
    <a class=\"card\" href=\"#\">
      <div class=\"card__background\" style=\"background-image: url(https://imgs.search.brave.com/hdZJ2U4qJV1ui4R59VKZ7SDQqMCW0JsgPE7Nr1J9xto/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzL2ZkLzdh/LzJkL2ZkN2EyZDE4/NzVmZjgzNjI0MGU1/NmJiMTU0ZGU3MjQx/LmpwZw)\"></div>
      <div class=\"card__content\">
        <p class=\"card__category\">LE Trading</p>
        <h3 class=\"card__heading\">J'aime Faire du Trading</h3>
      </div>
    </a>
    <a class=\"card\" href=\"#\">
      <div class=\"card__background\" style=\"background-image: url(https://imgs.search.brave.com/UiTrfivkdVuzYLNb1J0P_6YD6IX5FqDcoxVAqnyNDvo/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9jb250/ZW50cy5tZWRpYWRl/Y2F0aGxvbi5jb20v/czgwMjg4NS9rJDk0/Y2I0MzkxN2IyZjdj/YmYzMjEzZjJmZDg2/NTVjZGVlLzUwMHgw/LzMxMjBwdDIwODAv/NTU0N3hjcjM2OTgv/bXVzY3VsYXRpb24t/ZnVsbC1ib2R5Lmpw/Zz9mb3JtYXQ9YXV0/bw)\"></div>
      <div class=\"card__content\">
        <p class=\"card__category\">La musculation</p>
        <h3 class=\"card__heading\">Je pratique la musculation</h3>
      </div>
    </li>
    <a class=\"card\" href=\"#\">
      <div class=\"card__background\" style=\"background-image: url(https://imgs.search.brave.com/cPgArnzXJ6wQo0Wi1rqhygVm5NsAUpX2zp96V03By4M/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS50b3BhY2hhdC5j/b20vbWVkaWEvczIw/MDAvNjRhZDNkNGVk/MDdlNjQzNzViNGZm/MWUzLmpwZw)\"></div>
      <div class=\"card__content\">
        <p class=\"card__category\">Les jeux vidéos</p>
        <h3 class=\"card__heading\">Je suis un joueur compétitif sur le jeux Fortnite</h3>
      </div>
    </a>
  <div>
</section>
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "plus/index.html.twig";
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

{% block title %}Hello PlusController!{% endblock %}

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
<h1>Voici quelque unes de mes passions je les pratiques dans ma vie perso ! </h1>

</div>
<link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\">

<section class=\"hero-section\">
  <div class=\"card-grid\">
    <a class=\"card\" href=\"#\">
      <div class=\"card__background\" style=\"background-image: url(https://imgs.search.brave.com/ApRoSCCJ_DcwQCvhYtQiX14fPDCjBJaNiro_nIkjqkg/rs:fit:500:0:0/g:ce/aHR0cHM6Ly91cGxv/YWQud2lraW1lZGlh/Lm9yZy93aWtpcGVk/aWEvY29tbW9ucy9m/L2YyL0pPX0F0bGFu/dGFfMTk5Nl8tX0Jv/eGUuanBn)\"></div>
      <div class=\"card__content\">
        <p class=\"card__category\">La Boxe</p>
        <h3 class=\"card__heading\">Je Pratique la boxe</h3>
      </div>
    </a>
    <a class=\"card\" href=\"#\">
      <div class=\"card__background\" style=\"background-image: url(https://imgs.search.brave.com/hdZJ2U4qJV1ui4R59VKZ7SDQqMCW0JsgPE7Nr1J9xto/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzL2ZkLzdh/LzJkL2ZkN2EyZDE4/NzVmZjgzNjI0MGU1/NmJiMTU0ZGU3MjQx/LmpwZw)\"></div>
      <div class=\"card__content\">
        <p class=\"card__category\">LE Trading</p>
        <h3 class=\"card__heading\">J'aime Faire du Trading</h3>
      </div>
    </a>
    <a class=\"card\" href=\"#\">
      <div class=\"card__background\" style=\"background-image: url(https://imgs.search.brave.com/UiTrfivkdVuzYLNb1J0P_6YD6IX5FqDcoxVAqnyNDvo/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9jb250/ZW50cy5tZWRpYWRl/Y2F0aGxvbi5jb20v/czgwMjg4NS9rJDk0/Y2I0MzkxN2IyZjdj/YmYzMjEzZjJmZDg2/NTVjZGVlLzUwMHgw/LzMxMjBwdDIwODAv/NTU0N3hjcjM2OTgv/bXVzY3VsYXRpb24t/ZnVsbC1ib2R5Lmpw/Zz9mb3JtYXQ9YXV0/bw)\"></div>
      <div class=\"card__content\">
        <p class=\"card__category\">La musculation</p>
        <h3 class=\"card__heading\">Je pratique la musculation</h3>
      </div>
    </li>
    <a class=\"card\" href=\"#\">
      <div class=\"card__background\" style=\"background-image: url(https://imgs.search.brave.com/cPgArnzXJ6wQo0Wi1rqhygVm5NsAUpX2zp96V03By4M/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS50b3BhY2hhdC5j/b20vbWVkaWEvczIw/MDAvNjRhZDNkNGVk/MDdlNjQzNzViNGZm/MWUzLmpwZw)\"></div>
      <div class=\"card__content\">
        <p class=\"card__category\">Les jeux vidéos</p>
        <h3 class=\"card__heading\">Je suis un joueur compétitif sur le jeux Fortnite</h3>
      </div>
    </a>
  <div>
</section>
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
{% endblock %}
", "plus/index.html.twig", "C:\\Users\\nellg\\SAE-SYMFONY\\templates\\plus\\index.html.twig");
    }
}
