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

/* mailer/sendMail.html.twig */
class __TwigTemplate_aa844f3224b1ed00213f8e12db82a837 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mailer/sendMail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mailer/sendMail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div>
    <h1>Veuillez confirmer votre compte</h1>
    <p>
        Bienvenue dans votre app Brasil Burger , cliquer sur  <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("api_users_verify_mail_collection", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 7, $this->source); })())]), "html", null, true);
        echo "\">confirmation</a> pour confirmer votre compte.
    </p>
    <p>
        Expire at ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["expireAt"]) || array_key_exists("expireAt", $context) ? $context["expireAt"] : (function () { throw new RuntimeError('Variable "expireAt" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "
    </p>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "mailer/sendMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 10,  64 => 7,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<div>
    <h1>Veuillez confirmer votre compte</h1>
    <p>
        Bienvenue dans votre app Brasil Burger , cliquer sur  <a href=\"{{ url('api_users_verify_mail_collection',{\"token\" : token}) }}\">confirmation</a> pour confirmer votre compte.
    </p>
    <p>
        Expire at {{ expireAt }}
    </p>
</div>
{% endblock %}", "mailer/sendMail.html.twig", "/home/lutwrld/Desktop/Projet_fil_rouge-dev/brasil_burger_api/templates/mailer/sendMail.html.twig");
    }
}
