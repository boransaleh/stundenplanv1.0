<?php

/* Emails/ResetPassword.html.twig */
class __TwigTemplate_26b2a68971fed54e4965c6c4ae835042e5f0504f6a6336ade99a751767d565d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "Emails/ResetPassword.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cb0f1ba73a2e1d2b892537c3d00cce9f657a035fec0a5f20e221c6a6b3e3dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb0f1ba73a2e1d2b892537c3d00cce9f657a035fec0a5f20e221c6a6b3e3dc5->enter($__internal_5cb0f1ba73a2e1d2b892537c3d00cce9f657a035fec0a5f20e221c6a6b3e3dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/ResetPassword.html.twig"));

        $__internal_31c8c9c15b99f69e70252a792ba8682c0f9eb2786a5e92524f1fc3441815d0ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c8c9c15b99f69e70252a792ba8682c0f9eb2786a5e92524f1fc3441815d0ce->enter($__internal_31c8c9c15b99f69e70252a792ba8682c0f9eb2786a5e92524f1fc3441815d0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/ResetPassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cb0f1ba73a2e1d2b892537c3d00cce9f657a035fec0a5f20e221c6a6b3e3dc5->leave($__internal_5cb0f1ba73a2e1d2b892537c3d00cce9f657a035fec0a5f20e221c6a6b3e3dc5_prof);

        
        $__internal_31c8c9c15b99f69e70252a792ba8682c0f9eb2786a5e92524f1fc3441815d0ce->leave($__internal_31c8c9c15b99f69e70252a792ba8682c0f9eb2786a5e92524f1fc3441815d0ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f92eecc13fb7c62b511214546e8d7515f7e8b36ab05fca060c50672a0bc20e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f92eecc13fb7c62b511214546e8d7515f7e8b36ab05fca060c50672a0bc20e14->enter($__internal_f92eecc13fb7c62b511214546e8d7515f7e8b36ab05fca060c50672a0bc20e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af56b7b5befdcd845bed502c7bde1a5494ace14c68d0f6ff29d0ac72771cfcf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af56b7b5befdcd845bed502c7bde1a5494ace14c68d0f6ff29d0ac72771cfcf3->enter($__internal_af56b7b5befdcd845bed502c7bde1a5494ace14c68d0f6ff29d0ac72771cfcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <div class=\"jumbotron\">

        <div class=\"row\">


            <div class=\"col-sm-12 \" style=\"padding-bottom: 30%\">


                </br><br> </br><br><h4>Hallo , you can reset your password by clicking in the below link , Kindly note that the link will be expired after changing your password!!</h4></br>

                <a href=\"http://localhost/web/app_dev.php/resetpassword/";
        // line 16
        echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["passwordKey"] ?? $this->getContext($context, "passwordKey")), "html", null, true);
        echo "\" class=\"btn  btn-primary btn-lg\" > click Here </a>


            </div>


        </div>

";
        
        $__internal_af56b7b5befdcd845bed502c7bde1a5494ace14c68d0f6ff29d0ac72771cfcf3->leave($__internal_af56b7b5befdcd845bed502c7bde1a5494ace14c68d0f6ff29d0ac72771cfcf3_prof);

        
        $__internal_f92eecc13fb7c62b511214546e8d7515f7e8b36ab05fca060c50672a0bc20e14->leave($__internal_f92eecc13fb7c62b511214546e8d7515f7e8b36ab05fca060c50672a0bc20e14_prof);

    }

    public function getTemplateName()
    {
        return "Emails/ResetPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block body %}


    <div class=\"jumbotron\">

        <div class=\"row\">


            <div class=\"col-sm-12 \" style=\"padding-bottom: 30%\">


                </br><br> </br><br><h4>Hallo , you can reset your password by clicking in the below link , Kindly note that the link will be expired after changing your password!!</h4></br>

                <a href=\"http://localhost/web/app_dev.php/resetpassword/{{ email }}/{{ passwordKey }}\" class=\"btn  btn-primary btn-lg\" > click Here </a>


            </div>


        </div>

{% endblock %}

", "Emails/ResetPassword.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\Emails\\ResetPassword.html.twig");
    }
}
