<?php

/* ::loginLayout.html.twig */
class __TwigTemplate_077949a8fecfff5d381ac1e9ee75098e555823f5ab44f9822d692bc1a7e1620f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd8a34e2c5618432eff6f9328fcecf16fa6a13f339e24f76950adad9f2a5b13e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8a34e2c5618432eff6f9328fcecf16fa6a13f339e24f76950adad9f2a5b13e->enter($__internal_dd8a34e2c5618432eff6f9328fcecf16fa6a13f339e24f76950adad9f2a5b13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::loginLayout.html.twig"));

        $__internal_827407db8bd00d7a71e5a5b4b3aaf99657b7659071fabc4004d89721039ba408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827407db8bd00d7a71e5a5b4b3aaf99657b7659071fabc4004d89721039ba408->enter($__internal_827407db8bd00d7a71e5a5b4b3aaf99657b7659071fabc4004d89721039ba408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::loginLayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
</head>
<body>

<div class=\"container\">


    ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "

    <div class=\"row navbar navbar-default navbar-fixed-bottom\">
        <footer style=\"width: 100%;bottom: 0px;background-color: #fff;padding: 10px;font-size: 12px;color: #676a6c;\" class=\"clearfix\">
            <div class=\"pull-left\" style=\"padding-right:10px; padding-left:10px;\"><b>Kölner Wirtschaftsfachschule Copyright</b> &copy; 2017</div>
            <div class=\"pull-right\" style=\"padding-right:10px; padding-left:10px;\">Stunden Plan System</div>
        </footer>
    </div>
</div>
<br>




";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "</body>
</html>
";
        
        $__internal_dd8a34e2c5618432eff6f9328fcecf16fa6a13f339e24f76950adad9f2a5b13e->leave($__internal_dd8a34e2c5618432eff6f9328fcecf16fa6a13f339e24f76950adad9f2a5b13e_prof);

        
        $__internal_827407db8bd00d7a71e5a5b4b3aaf99657b7659071fabc4004d89721039ba408->leave($__internal_827407db8bd00d7a71e5a5b4b3aaf99657b7659071fabc4004d89721039ba408_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc1c9e93853ec8daeea8b081493b6131d7018c3848c31fac229038cda9099049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc1c9e93853ec8daeea8b081493b6131d7018c3848c31fac229038cda9099049->enter($__internal_dc1c9e93853ec8daeea8b081493b6131d7018c3848c31fac229038cda9099049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ab0c7b826e5bd624c00eb756400d0eb3d3cfd5221398bccfa29aebc937143ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab0c7b826e5bd624c00eb756400d0eb3d3cfd5221398bccfa29aebc937143ff->enter($__internal_2ab0c7b826e5bd624c00eb756400d0eb3d3cfd5221398bccfa29aebc937143ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Stunden Plan System!";
        
        $__internal_2ab0c7b826e5bd624c00eb756400d0eb3d3cfd5221398bccfa29aebc937143ff->leave($__internal_2ab0c7b826e5bd624c00eb756400d0eb3d3cfd5221398bccfa29aebc937143ff_prof);

        
        $__internal_dc1c9e93853ec8daeea8b081493b6131d7018c3848c31fac229038cda9099049->leave($__internal_dc1c9e93853ec8daeea8b081493b6131d7018c3848c31fac229038cda9099049_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6378c182d659ed56bb2437704d480a334d5afc4b1269287a588f26d8b22d2f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6378c182d659ed56bb2437704d480a334d5afc4b1269287a588f26d8b22d2f33->enter($__internal_6378c182d659ed56bb2437704d480a334d5afc4b1269287a588f26d8b22d2f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8110c949808145b73209058bc2868776dc0a402ca73d5733115a92bd638d8493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8110c949808145b73209058bc2868776dc0a402ca73d5733115a92bd638d8493->enter($__internal_8110c949808145b73209058bc2868776dc0a402ca73d5733115a92bd638d8493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrapValidator.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/default.css"), "html", null, true);
        echo "\"/>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
        <link href=\"https://fonts.googleapis.com/css?family=Quicksand:700\" rel=\"stylesheet\">

    ";
        
        $__internal_8110c949808145b73209058bc2868776dc0a402ca73d5733115a92bd638d8493->leave($__internal_8110c949808145b73209058bc2868776dc0a402ca73d5733115a92bd638d8493_prof);

        
        $__internal_6378c182d659ed56bb2437704d480a334d5afc4b1269287a588f26d8b22d2f33->leave($__internal_6378c182d659ed56bb2437704d480a334d5afc4b1269287a588f26d8b22d2f33_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6b3fb74595fc6e4866abbd71aeb45b7b7188bf583262ed58a646025e81a9d30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b3fb74595fc6e4866abbd71aeb45b7b7188bf583262ed58a646025e81a9d30->enter($__internal_a6b3fb74595fc6e4866abbd71aeb45b7b7188bf583262ed58a646025e81a9d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f893f3bcc32da34de6e3462c3474cdd1478799188495821eea0e3813cc9667ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f893f3bcc32da34de6e3462c3474cdd1478799188495821eea0e3813cc9667ff->enter($__internal_f893f3bcc32da34de6e3462c3474cdd1478799188495821eea0e3813cc9667ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "
    ";
        
        $__internal_f893f3bcc32da34de6e3462c3474cdd1478799188495821eea0e3813cc9667ff->leave($__internal_f893f3bcc32da34de6e3462c3474cdd1478799188495821eea0e3813cc9667ff_prof);

        
        $__internal_a6b3fb74595fc6e4866abbd71aeb45b7b7188bf583262ed58a646025e81a9d30->leave($__internal_a6b3fb74595fc6e4866abbd71aeb45b7b7188bf583262ed58a646025e81a9d30_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_71f5850f4bc85ff42e87bd33e5524b54c6f54cf648f3b7b211d77fef6e9686c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71f5850f4bc85ff42e87bd33e5524b54c6f54cf648f3b7b211d77fef6e9686c7->enter($__internal_71f5850f4bc85ff42e87bd33e5524b54c6f54cf648f3b7b211d77fef6e9686c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_02b671b051bf42435810bd98365007ce57b27a611e01af73320bf05ad3a4f72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b671b051bf42435810bd98365007ce57b27a611e01af73320bf05ad3a4f72a->enter($__internal_02b671b051bf42435810bd98365007ce57b27a611e01af73320bf05ad3a4f72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "

    <script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-dialog.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrapValidator.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/default.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">

        \$(document).ready(function () {
            \$(document).ajaxStart(function () {
                \$('#pleaseWaitDialog').modal('show');
            }).ajaxStop(function () {
                \$('#pleaseWaitDialog').modal('hide');

            });
        });

    </script>



";
        
        $__internal_02b671b051bf42435810bd98365007ce57b27a611e01af73320bf05ad3a4f72a->leave($__internal_02b671b051bf42435810bd98365007ce57b27a611e01af73320bf05ad3a4f72a_prof);

        
        $__internal_71f5850f4bc85ff42e87bd33e5524b54c6f54cf648f3b7b211d77fef6e9686c7->leave($__internal_71f5850f4bc85ff42e87bd33e5524b54c6f54cf648f3b7b211d77fef6e9686c7_prof);

    }

    public function getTemplateName()
    {
        return "::loginLayout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  193 => 49,  189 => 48,  185 => 47,  181 => 46,  177 => 45,  173 => 43,  164 => 42,  153 => 26,  144 => 25,  130 => 14,  126 => 13,  122 => 12,  118 => 11,  113 => 9,  109 => 7,  100 => 6,  82 => 5,  70 => 66,  68 => 42,  52 => 28,  50 => 25,  41 => 18,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Stunden Plan System!{% endblock %}</title>
    {% block stylesheets %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <script type=\"text/javascript\" src=\"{{ asset('js/jquery-1.9.1.js') }}\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\"/>
        <link href=\"{{ asset('css/bootstrapValidator.css') }}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/default.css') }}\"/>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
        <link href=\"https://fonts.googleapis.com/css?family=Quicksand:700\" rel=\"stylesheet\">

    {% endblock %}

</head>
<body>

<div class=\"container\">


    {% block body %}

    {% endblock %}


    <div class=\"row navbar navbar-default navbar-fixed-bottom\">
        <footer style=\"width: 100%;bottom: 0px;background-color: #fff;padding: 10px;font-size: 12px;color: #676a6c;\" class=\"clearfix\">
            <div class=\"pull-left\" style=\"padding-right:10px; padding-left:10px;\"><b>Kölner Wirtschaftsfachschule Copyright</b> &copy; 2017</div>
            <div class=\"pull-right\" style=\"padding-right:10px; padding-left:10px;\">Stunden Plan System</div>
        </footer>
    </div>
</div>
<br>




{% block javascripts %}


    <script type=\"text/javascript\" src=\"{{ asset('js/jquery-1.9.1.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap-dialog.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrapValidator.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/default.js') }}\"></script>
    <script type=\"text/javascript\">

        \$(document).ready(function () {
            \$(document).ajaxStart(function () {
                \$('#pleaseWaitDialog').modal('show');
            }).ajaxStop(function () {
                \$('#pleaseWaitDialog').modal('hide');

            });
        });

    </script>



{% endblock %}
</body>
</html>
", "::loginLayout.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/loginLayout.html.twig");
    }
}
