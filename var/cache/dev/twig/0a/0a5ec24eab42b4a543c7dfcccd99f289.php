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

/* portfolio/index.html.twig */
class __TwigTemplate_adb9bad605ba6516cc0451c8a683ed52 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/index.html.twig", 1);
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

        echo "Hello PortfolioController!";
        
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
        echo "<link rel=\"stylesheet\" href=\"assets/styles/portfolio.css\">
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
<h1>Mes compétences</h1>

</div>
<div id=\"watch\">
  <div class=\"frame-face\"></div>
  <ul class=\"minute-marks\">
    <li></li><li></li><li></li><li></li><li></li><li></li>
    <li></li><li></li><li></li><li></li><li></li><li></li>
    <li></li><li></li><li></li><li></li><li></li><li></li>
    <li></li><li></li><li></li><li></li><li></li><li></li>
    <li></li><li></li><li></li><li></li><li></li><li></li>
    <li></li><li></li><li></li><li></li><li></li><li></li>
    <li></li><li></li><li></li><li></li><li></li><li></li>
    <li></li><li></li><li></li><li></li><li></li><li></li>
  </ul>
  <div class=\"digital-wrap\">
    <ul class=\"digit-hours\">
      <li>23</li>
      <li>00</li><li>01</li><li>02</li><li>03</li><li>04</li><li>05</li>
      <li>06</li><li>07</li><li>08</li><li>09</li><li>10</li><li>11</li>
      <li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li>
      <li>18</li><li>19</li><li>20</li><li>21</li><li>22</li>
    </ul>
    <ul class=\"digit-minutes\">
      <li>10</li><li>11</li>
      <li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li>
      <li>18</li><li>19</li><li>20</li><li>21</li><li>22</li><li>23</li>
      <li>24</li><li>25</li><li>26</li><li>27</li><li>28</li><li>29</li>
      <li>30</li><li>31</li><li>32</li><li>33</li><li>34</li><li>35</li>
      <li>36</li><li>37</li><li>38</li><li>39</li><li>40</li><li>41</li>
      <li>42</li><li>43</li><li>44</li><li>45</li><li>46</li><li>47</li>
      <li>48</li><li>49</li><li>50</li><li>51</li><li>52</li><li>53</li>
      <li>54</li><li>55</li><li>56</li><li>57</li><li>58</li><li>59</li>
      <li>00</li><li>01</li><li>02</li><li>03</li><li>04</li><li>05</li>
      <li>06</li><li>07</li><li>08</li><li>09</li>
    </ul>
    <ul class=\"digit-seconds\">
      <li>20</li><li>21</li><li>22</li><li>23</li>
      <li>24</li><li>25</li><li>26</li><li>27</li><li>28</li><li>29</li>
      <li>30</li><li>31</li><li>32</li><li>33</li><li>34</li><li>35</li>
      <li>36</li><li>37</li><li>38</li><li>39</li><li>40</li><li>41</li>
      <li>42</li><li>43</li><li>44</li><li>45</li><li>46</li><li>47</li>
      <li>48</li><li>49</li><li>50</li><li>51</li><li>52</li><li>53</li>
      <li>54</li><li>55</li><li>56</li><li>57</li><li>58</li><li>59</li>
      <li>00</li><li>01</li><li>02</li><li>03</li><li>04</li><li>05</li>
      <li>06</li><li>07</li><li>08</li><li>09</li><li>10</li><li>11</li>
      <li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li>
      <li>18</li><li>19</li>
    </ul>
  </div>
  <ul class=\"digits\">
    <li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li>
    <li>7</li><li>8</li><li>9</li><li>10</li><li>11</li><li>12</li>
  </ul>
  <div class=\"hours-hand\"></div>
  <div class=\"minutes-hand\"></div>
  <div class=\"seconds-hand\"></div>
</div>
    <h2 class=\"text-center\"></h2>

    <!-- Partie 1: Assister l’administrateur du réseau -->
    <div class=\"container d-flex align-items-center justify-content-center\">
        <div class=\"mb-4 text-center\">
            <h4>Assister l’administrateur du réseau</h4>
            <div class=\"progress-container\">
            </div>
            <p class=\"mt-2\"><strong>Apprentissages critiques :</strong></p>
            <!-- Barres de progression pour chaque apprentissage critique -->
            <ul class=\"text-left\">
                <li>
                    <span>Maîtriser les lois fondamentales de l’électricité afin d’intervenir sur des équipements de réseaux et télécommunications (habilitation électrique)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%; height: 15px;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\">75%</div>
                    </div>
                </li>
                <li>
                    <span>Comprendre les principes et standards du codage de l’information</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 100%; height: 15px;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\">100%</div>
                    </div>
                </li>
                <li>
                    <span>Configurer les fonctions de base du réseau local (Ethernet, IPv4, intro IPv6, commutation, VLANs, routage statique)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%; height: 15px;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\">75%</div>
                    </div>
                </li>
                <li>
                    <span>Maîtriser les rôles et les principes fondamentaux des systèmes d’exploitation afin d’interagir avec ceux-ci pour la configuration et
administration des réseaux et services fournis (DHCP, DNS, ...)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 90%; height: 15px;\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\">90%</div>
                    </div>
                </li>
                <li>
                    <span>Savoir identifier les dysfonctionnements du réseau local</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%; height: 15px;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\">75%</div>
                    </div>
                </li>
                <li>
                    <span> Installer un poste client (et le sécuriser: antivirus, parefeu, comptes, ...)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 90%; height: 15px;\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\">90%</div>
                    </div>
                </li>
                <!-- Ajoutez d'autres barres de progression au besoin -->
            </ul>
        </div>
    </div>

    <!-- Partie 2: Découvrir les transmissions et la ToIP -->
    <div class=\"container d-flex align-items-center justify-content-center\">
        <div class=\"mb-4 text-center\">
            <h4>Découvrir les transmissions et la ToIP</h4>
            <div class=\"progress-container\">
            </div>
            <p class=\"mt-2\"><strong>Apprentissages critiques :</strong></p>
            <!-- Barres de progression pour chaque apprentissage critique -->
            <ul class=\"text-left\">
                <li>
                    <span>Mesurer et analyser les signaux (audio et vidéo, ordres de grandeurs, comprendre la dualité temps/fréquence et utiliser des équipements d’analyse spectrale, avec projets autour de la chaîne d’acquisition/traitement)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%; height: 15px;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">0%</div>
                    </div>
                </li>
                <li>
                    <span>Caractériser des systèmes de transmissions élémentaires et découvrir la modélisation mathématique de leur fonctionnement</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%; height: 15px;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">0%</div>
                    </div>
                </li>
                <li>
                    <span>Déployer des supports de transmission (traitement au choix de la propagation, câblage LAN, fibre optique, ou une introduction à l’IoT)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 100%; height: 15px;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\">100%</div>
                    </div>
                </li>
                <li>
                    <span>Connecter les systèmes de ToIP (s’interprétant ici comme la possibilité de se connecter au réseau téléphonique)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%; height: 15px;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">0%</div>
                    </div>
                </li>
                <li>
                    <span>Communiquer avec un client ou un collaborateur</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%; height: 15px;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\">75%</div>
                    </div>
                </li>
                <!-- Ajoutez d'autres barres de progression au besoin -->
            </ul>
        </div>
    </div>

    <!-- Partie 3: S’intégrer dans un service informatique -->
    <div class=\"container d-flex align-items-center justify-content-center\">
        <div class=\"mb-4 text-center\">
            <h4>S’intégrer dans un service informatique</h4>
            <div class=\"progress-container\">
            </div>
            <p class=\"mt-2\"><strong>Apprentissages critiques :</strong></p>
            <!-- Barres de progression pour chaque apprentissage critique -->
            <ul class=\"text-left\">
                <li>
                    <span>Utiliser un système informatique et ses outils (intro système, fichiers, CLI, zips, outils collaboratifs sur Internet, hygiène informatique. . . : référentiel PIX et CyberEdu)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 100%; height: 15px;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\">100%</div>
                    </div>
                </li>
                <li>
                    <span>Lire, exécuter, corriger et modifier un programme (programmes simples type scripts, algorithme inclus)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 100%; height: 15px;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\">100%</div>
                    </div>
                </li>
                <li>
                    <span>Traduire un algorithme, dans un langage et pour un environnement donné (peut inclure plusieurs, y compris objet)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 100%; height: 15px;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\">100%</div>
                    </div>
                </li>
                <li>
                    <span>Connaître l’architecture et les technologies d’un site Web (Langages et outils : HTML, CSS, CMS, JS, responsive)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 100%; height: 15px;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\">100%</div>
                    </div>
                </li>
                <li>
                    <span>Choisir les mécanismes de gestion de données adaptés au développement de l’outil (BDD, SQL, LDAP, JSON, sérialisation, conception de BDD simple. . .)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 50%; height: 15px;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">50%</div>
                    </div>
                </li>
                <li>
                    <span>S’intégrer dans un environnement propice au développement et au travail collaboratif (intro méthodes agiles)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%; height: 15px;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>
                    </div>
                </li>
                <!-- Ajoutez d'autres barres de progression au besoin -->
            </ul>
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

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "portfolio/index.html.twig";
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

{% block title %}Hello PortfolioController!{% endblock %}

{% block body %}
<link rel=\"stylesheet\" href=\"assets/styles/portfolio.css\">
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
<h1>Mes compétences</h1>

</div>
<div id=\"watch\">
  <div class=\"frame-face\"></div>
  <ul class=\"minute-marks\">
    <li></li><li></li><li></li><li></li><li></li><li></li>
    <li></li><li></li><li></li><li></li><li></li><li></li>
    <li></li><li></li><li></li><li></li><li></li><li></li>
    <li></li><li></li><li></li><li></li><li></li><li></li>
    <li></li><li></li><li></li><li></li><li></li><li></li>
    <li></li><li></li><li></li><li></li><li></li><li></li>
    <li></li><li></li><li></li><li></li><li></li><li></li>
    <li></li><li></li><li></li><li></li><li></li><li></li>
  </ul>
  <div class=\"digital-wrap\">
    <ul class=\"digit-hours\">
      <li>23</li>
      <li>00</li><li>01</li><li>02</li><li>03</li><li>04</li><li>05</li>
      <li>06</li><li>07</li><li>08</li><li>09</li><li>10</li><li>11</li>
      <li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li>
      <li>18</li><li>19</li><li>20</li><li>21</li><li>22</li>
    </ul>
    <ul class=\"digit-minutes\">
      <li>10</li><li>11</li>
      <li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li>
      <li>18</li><li>19</li><li>20</li><li>21</li><li>22</li><li>23</li>
      <li>24</li><li>25</li><li>26</li><li>27</li><li>28</li><li>29</li>
      <li>30</li><li>31</li><li>32</li><li>33</li><li>34</li><li>35</li>
      <li>36</li><li>37</li><li>38</li><li>39</li><li>40</li><li>41</li>
      <li>42</li><li>43</li><li>44</li><li>45</li><li>46</li><li>47</li>
      <li>48</li><li>49</li><li>50</li><li>51</li><li>52</li><li>53</li>
      <li>54</li><li>55</li><li>56</li><li>57</li><li>58</li><li>59</li>
      <li>00</li><li>01</li><li>02</li><li>03</li><li>04</li><li>05</li>
      <li>06</li><li>07</li><li>08</li><li>09</li>
    </ul>
    <ul class=\"digit-seconds\">
      <li>20</li><li>21</li><li>22</li><li>23</li>
      <li>24</li><li>25</li><li>26</li><li>27</li><li>28</li><li>29</li>
      <li>30</li><li>31</li><li>32</li><li>33</li><li>34</li><li>35</li>
      <li>36</li><li>37</li><li>38</li><li>39</li><li>40</li><li>41</li>
      <li>42</li><li>43</li><li>44</li><li>45</li><li>46</li><li>47</li>
      <li>48</li><li>49</li><li>50</li><li>51</li><li>52</li><li>53</li>
      <li>54</li><li>55</li><li>56</li><li>57</li><li>58</li><li>59</li>
      <li>00</li><li>01</li><li>02</li><li>03</li><li>04</li><li>05</li>
      <li>06</li><li>07</li><li>08</li><li>09</li><li>10</li><li>11</li>
      <li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li>
      <li>18</li><li>19</li>
    </ul>
  </div>
  <ul class=\"digits\">
    <li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li>
    <li>7</li><li>8</li><li>9</li><li>10</li><li>11</li><li>12</li>
  </ul>
  <div class=\"hours-hand\"></div>
  <div class=\"minutes-hand\"></div>
  <div class=\"seconds-hand\"></div>
</div>
    <h2 class=\"text-center\"></h2>

    <!-- Partie 1: Assister l’administrateur du réseau -->
    <div class=\"container d-flex align-items-center justify-content-center\">
        <div class=\"mb-4 text-center\">
            <h4>Assister l’administrateur du réseau</h4>
            <div class=\"progress-container\">
            </div>
            <p class=\"mt-2\"><strong>Apprentissages critiques :</strong></p>
            <!-- Barres de progression pour chaque apprentissage critique -->
            <ul class=\"text-left\">
                <li>
                    <span>Maîtriser les lois fondamentales de l’électricité afin d’intervenir sur des équipements de réseaux et télécommunications (habilitation électrique)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%; height: 15px;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\">75%</div>
                    </div>
                </li>
                <li>
                    <span>Comprendre les principes et standards du codage de l’information</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 100%; height: 15px;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\">100%</div>
                    </div>
                </li>
                <li>
                    <span>Configurer les fonctions de base du réseau local (Ethernet, IPv4, intro IPv6, commutation, VLANs, routage statique)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%; height: 15px;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\">75%</div>
                    </div>
                </li>
                <li>
                    <span>Maîtriser les rôles et les principes fondamentaux des systèmes d’exploitation afin d’interagir avec ceux-ci pour la configuration et
administration des réseaux et services fournis (DHCP, DNS, ...)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 90%; height: 15px;\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\">90%</div>
                    </div>
                </li>
                <li>
                    <span>Savoir identifier les dysfonctionnements du réseau local</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%; height: 15px;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\">75%</div>
                    </div>
                </li>
                <li>
                    <span> Installer un poste client (et le sécuriser: antivirus, parefeu, comptes, ...)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 90%; height: 15px;\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\">90%</div>
                    </div>
                </li>
                <!-- Ajoutez d'autres barres de progression au besoin -->
            </ul>
        </div>
    </div>

    <!-- Partie 2: Découvrir les transmissions et la ToIP -->
    <div class=\"container d-flex align-items-center justify-content-center\">
        <div class=\"mb-4 text-center\">
            <h4>Découvrir les transmissions et la ToIP</h4>
            <div class=\"progress-container\">
            </div>
            <p class=\"mt-2\"><strong>Apprentissages critiques :</strong></p>
            <!-- Barres de progression pour chaque apprentissage critique -->
            <ul class=\"text-left\">
                <li>
                    <span>Mesurer et analyser les signaux (audio et vidéo, ordres de grandeurs, comprendre la dualité temps/fréquence et utiliser des équipements d’analyse spectrale, avec projets autour de la chaîne d’acquisition/traitement)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%; height: 15px;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">0%</div>
                    </div>
                </li>
                <li>
                    <span>Caractériser des systèmes de transmissions élémentaires et découvrir la modélisation mathématique de leur fonctionnement</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%; height: 15px;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">0%</div>
                    </div>
                </li>
                <li>
                    <span>Déployer des supports de transmission (traitement au choix de la propagation, câblage LAN, fibre optique, ou une introduction à l’IoT)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 100%; height: 15px;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\">100%</div>
                    </div>
                </li>
                <li>
                    <span>Connecter les systèmes de ToIP (s’interprétant ici comme la possibilité de se connecter au réseau téléphonique)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%; height: 15px;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">0%</div>
                    </div>
                </li>
                <li>
                    <span>Communiquer avec un client ou un collaborateur</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%; height: 15px;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\">75%</div>
                    </div>
                </li>
                <!-- Ajoutez d'autres barres de progression au besoin -->
            </ul>
        </div>
    </div>

    <!-- Partie 3: S’intégrer dans un service informatique -->
    <div class=\"container d-flex align-items-center justify-content-center\">
        <div class=\"mb-4 text-center\">
            <h4>S’intégrer dans un service informatique</h4>
            <div class=\"progress-container\">
            </div>
            <p class=\"mt-2\"><strong>Apprentissages critiques :</strong></p>
            <!-- Barres de progression pour chaque apprentissage critique -->
            <ul class=\"text-left\">
                <li>
                    <span>Utiliser un système informatique et ses outils (intro système, fichiers, CLI, zips, outils collaboratifs sur Internet, hygiène informatique. . . : référentiel PIX et CyberEdu)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 100%; height: 15px;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\">100%</div>
                    </div>
                </li>
                <li>
                    <span>Lire, exécuter, corriger et modifier un programme (programmes simples type scripts, algorithme inclus)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 100%; height: 15px;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\">100%</div>
                    </div>
                </li>
                <li>
                    <span>Traduire un algorithme, dans un langage et pour un environnement donné (peut inclure plusieurs, y compris objet)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 100%; height: 15px;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\">100%</div>
                    </div>
                </li>
                <li>
                    <span>Connaître l’architecture et les technologies d’un site Web (Langages et outils : HTML, CSS, CMS, JS, responsive)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 100%; height: 15px;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\">100%</div>
                    </div>
                </li>
                <li>
                    <span>Choisir les mécanismes de gestion de données adaptés au développement de l’outil (BDD, SQL, LDAP, JSON, sérialisation, conception de BDD simple. . .)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 50%; height: 15px;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">50%</div>
                    </div>
                </li>
                <li>
                    <span>S’intégrer dans un environnement propice au développement et au travail collaboratif (intro méthodes agiles)</span>
                    <div class=\"progress\" style=\"border: 1px solid #ccc; border-radius: 5px; margin: 5px;\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%; height: 15px;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>
                    </div>
                </li>
                <!-- Ajoutez d'autres barres de progression au besoin -->
            </ul>
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

{% endblock %}
", "portfolio/index.html.twig", "C:\\Users\\nellg\\SAE-SYMFONY\\templates\\portfolio\\index.html.twig");
    }
}
