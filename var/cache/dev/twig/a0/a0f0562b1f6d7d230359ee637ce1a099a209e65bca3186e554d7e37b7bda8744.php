<?php

/* :Emails:ResetPassword.html.twig */
class __TwigTemplate_8abd69ea1d080e9a4fcc10b23fa7381a5b73e71f554f28579b9c27e7daf9b131 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":Emails:ResetPassword.html.twig", 1);
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
        $__internal_bc5b1207ea1102f1a926c5292cdff650bc09da7e1a6e60e5b252c20e1fe9ee46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5b1207ea1102f1a926c5292cdff650bc09da7e1a6e60e5b252c20e1fe9ee46->enter($__internal_bc5b1207ea1102f1a926c5292cdff650bc09da7e1a6e60e5b252c20e1fe9ee46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Emails:ResetPassword.html.twig"));

        $__internal_7f1cd9af760145441fcf75ccf0fcf1bacb840302dbb209a0bd4e33e32f99f0e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1cd9af760145441fcf75ccf0fcf1bacb840302dbb209a0bd4e33e32f99f0e5->enter($__internal_7f1cd9af760145441fcf75ccf0fcf1bacb840302dbb209a0bd4e33e32f99f0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Emails:ResetPassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc5b1207ea1102f1a926c5292cdff650bc09da7e1a6e60e5b252c20e1fe9ee46->leave($__internal_bc5b1207ea1102f1a926c5292cdff650bc09da7e1a6e60e5b252c20e1fe9ee46_prof);

        
        $__internal_7f1cd9af760145441fcf75ccf0fcf1bacb840302dbb209a0bd4e33e32f99f0e5->leave($__internal_7f1cd9af760145441fcf75ccf0fcf1bacb840302dbb209a0bd4e33e32f99f0e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43023c0e53ed275a2dd4910f9ea98a4ea4cb98ee8690cd412cdb500f37ce57ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43023c0e53ed275a2dd4910f9ea98a4ea4cb98ee8690cd412cdb500f37ce57ee->enter($__internal_43023c0e53ed275a2dd4910f9ea98a4ea4cb98ee8690cd412cdb500f37ce57ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_259006dd9574739de2e589f13bfcd55e43daf3479e64ec793518b10703df7210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259006dd9574739de2e589f13bfcd55e43daf3479e64ec793518b10703df7210->enter($__internal_259006dd9574739de2e589f13bfcd55e43daf3479e64ec793518b10703df7210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_259006dd9574739de2e589f13bfcd55e43daf3479e64ec793518b10703df7210->leave($__internal_259006dd9574739de2e589f13bfcd55e43daf3479e64ec793518b10703df7210_prof);

        
        $__internal_43023c0e53ed275a2dd4910f9ea98a4ea4cb98ee8690cd412cdb500f37ce57ee->leave($__internal_43023c0e53ed275a2dd4910f9ea98a4ea4cb98ee8690cd412cdb500f37ce57ee_prof);

    }

    public function getTemplateName()
    {
        return ":Emails:ResetPassword.html.twig";
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

", ":Emails:ResetPassword.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/Emails/ResetPassword.html.twig");
    }
}
