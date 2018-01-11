<?php

/* ::layout.html.twig */
class __TwigTemplate_024557d6154353bed5797fc02252c8a68ec6458ace9cfd827b8d0e1ee791567c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_javascripts' => array($this, 'block_head_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96e545f1f20c5b9d453027a0dc9c84b8f923ff2c5558ef9187f4eaa210767222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e545f1f20c5b9d453027a0dc9c84b8f923ff2c5558ef9187f4eaa210767222->enter($__internal_96e545f1f20c5b9d453027a0dc9c84b8f923ff2c5558ef9187f4eaa210767222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_912a32e152d4f62c07819b0455b0c2f8e8094714bd9720bc948569cb111e0590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912a32e152d4f62c07819b0455b0c2f8e8094714bd9720bc948569cb111e0590->enter($__internal_912a32e152d4f62c07819b0455b0c2f8e8094714bd9720bc948569cb111e0590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('head_javascripts', $context, $blocks);
        // line 27
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<div class=\"container\" style=\"padding-top: 2%; padding-bottom:3%; \">


    ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "


</div>




</body>
</html>";
        
        $__internal_96e545f1f20c5b9d453027a0dc9c84b8f923ff2c5558ef9187f4eaa210767222->leave($__internal_96e545f1f20c5b9d453027a0dc9c84b8f923ff2c5558ef9187f4eaa210767222_prof);

        
        $__internal_912a32e152d4f62c07819b0455b0c2f8e8094714bd9720bc948569cb111e0590->leave($__internal_912a32e152d4f62c07819b0455b0c2f8e8094714bd9720bc948569cb111e0590_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce0ec01db6a8e267ff154848c24de382f5f3ea59fd0d4d7c481ff42df4efb02e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce0ec01db6a8e267ff154848c24de382f5f3ea59fd0d4d7c481ff42df4efb02e->enter($__internal_ce0ec01db6a8e267ff154848c24de382f5f3ea59fd0d4d7c481ff42df4efb02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ece1a06b8214fb577abef7d1f7f772c3cbc5692e427ef2570bfe059ba5165336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece1a06b8214fb577abef7d1f7f772c3cbc5692e427ef2570bfe059ba5165336->enter($__internal_ece1a06b8214fb577abef7d1f7f772c3cbc5692e427ef2570bfe059ba5165336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SgDatatablesBundleDev";
        
        $__internal_ece1a06b8214fb577abef7d1f7f772c3cbc5692e427ef2570bfe059ba5165336->leave($__internal_ece1a06b8214fb577abef7d1f7f772c3cbc5692e427ef2570bfe059ba5165336_prof);

        
        $__internal_ce0ec01db6a8e267ff154848c24de382f5f3ea59fd0d4d7c481ff42df4efb02e->leave($__internal_ce0ec01db6a8e267ff154848c24de382f5f3ea59fd0d4d7c481ff42df4efb02e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_736bc529ffc02af96d5872b44b23be4b0ad12893aca5d967bd655f7f1565ed24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_736bc529ffc02af96d5872b44b23be4b0ad12893aca5d967bd655f7f1565ed24->enter($__internal_736bc529ffc02af96d5872b44b23be4b0ad12893aca5d967bd655f7f1565ed24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9bd2f106f4adfed72d3dd856f802d4c9687c2e226347a5c4a496313cff612396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd2f106f4adfed72d3dd856f802d4c9687c2e226347a5c4a496313cff612396->enter($__internal_9bd2f106f4adfed72d3dd856f802d4c9687c2e226347a5c4a496313cff612396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/v/bs/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/fc-3.2.2/fh-3.1.2/r-2.1.0/datatables.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.rawgit.com/noelboss/featherlight/1.7.1/release/featherlight.min.css\">
    ";
        
        $__internal_9bd2f106f4adfed72d3dd856f802d4c9687c2e226347a5c4a496313cff612396->leave($__internal_9bd2f106f4adfed72d3dd856f802d4c9687c2e226347a5c4a496313cff612396_prof);

        
        $__internal_736bc529ffc02af96d5872b44b23be4b0ad12893aca5d967bd655f7f1565ed24->leave($__internal_736bc529ffc02af96d5872b44b23be4b0ad12893aca5d967bd655f7f1565ed24_prof);

    }

    // line 14
    public function block_head_javascripts($context, array $blocks = array())
    {
        $__internal_763c92b3e6f5353c7f6097493ad1d9c00acb89f638ffb70baf7825bd1d32b8c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763c92b3e6f5353c7f6097493ad1d9c00acb89f638ffb70baf7825bd1d32b8c3->enter($__internal_763c92b3e6f5353c7f6097493ad1d9c00acb89f638ffb70baf7825bd1d32b8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascripts"));

        $__internal_95f67c3136a59eb4f3be43a60896b49e18c2f575b19542d5445ce33437ae62f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f67c3136a59eb4f3be43a60896b49e18c2f575b19542d5445ce33437ae62f4->enter($__internal_95f67c3136a59eb4f3be43a60896b49e18c2f575b19542d5445ce33437ae62f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascripts"));

        // line 15
        echo "        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment-with-locales.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.js\" charset=\"UTF-8\"></script>
        <script src=\"https://cdn.datatables.net/v/bs/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/fc-3.2.2/fh-3.1.2/r-2.1.0/datatables.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.min.js\"></script>
        <script src=\"https://cdn.rawgit.com/noelboss/featherlight/1.7.1/release/featherlight.min.js\"></script>

        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sgdatatables/js/pipeline.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    ";
        
        $__internal_95f67c3136a59eb4f3be43a60896b49e18c2f575b19542d5445ce33437ae62f4->leave($__internal_95f67c3136a59eb4f3be43a60896b49e18c2f575b19542d5445ce33437ae62f4_prof);

        
        $__internal_763c92b3e6f5353c7f6097493ad1d9c00acb89f638ffb70baf7825bd1d32b8c3->leave($__internal_763c92b3e6f5353c7f6097493ad1d9c00acb89f638ffb70baf7825bd1d32b8c3_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_20a8bfd9db64d5f1183b7d9154ad2dc386ecf9d2e684c7a996ade9c2858bbf9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a8bfd9db64d5f1183b7d9154ad2dc386ecf9d2e684c7a996ade9c2858bbf9c->enter($__internal_20a8bfd9db64d5f1183b7d9154ad2dc386ecf9d2e684c7a996ade9c2858bbf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9cb575dce11f06dceb3ac8c63b3285d4ec48be4cbf8a59fb9cb2446baf877d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb575dce11f06dceb3ac8c63b3285d4ec48be4cbf8a59fb9cb2446baf877d64->enter($__internal_9cb575dce11f06dceb3ac8c63b3285d4ec48be4cbf8a59fb9cb2446baf877d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "
    ";
        
        $__internal_9cb575dce11f06dceb3ac8c63b3285d4ec48be4cbf8a59fb9cb2446baf877d64->leave($__internal_9cb575dce11f06dceb3ac8c63b3285d4ec48be4cbf8a59fb9cb2446baf877d64_prof);

        
        $__internal_20a8bfd9db64d5f1183b7d9154ad2dc386ecf9d2e684c7a996ade9c2858bbf9c->leave($__internal_20a8bfd9db64d5f1183b7d9154ad2dc386ecf9d2e684c7a996ade9c2858bbf9c_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 35,  158 => 34,  146 => 25,  142 => 24,  137 => 22,  128 => 15,  119 => 14,  103 => 7,  94 => 6,  76 => 5,  57 => 37,  55 => 34,  44 => 27,  41 => 14,  39 => 6,  35 => 5,  29 => 1,);
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
    <meta charset=\"UTF-8\" />
    <title>{% block title %}SgDatatablesBundleDev{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/v/bs/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/fc-3.2.2/fh-3.1.2/r-2.1.0/datatables.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.rawgit.com/noelboss/featherlight/1.7.1/release/featherlight.min.css\">
    {% endblock %}
    {% block head_javascripts %}
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment-with-locales.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.js\" charset=\"UTF-8\"></script>
        <script src=\"https://cdn.datatables.net/v/bs/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/fc-3.2.2/fh-3.1.2/r-2.1.0/datatables.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.min.js\"></script>
        <script src=\"https://cdn.rawgit.com/noelboss/featherlight/1.7.1/release/featherlight.min.js\"></script>

        <script src=\"{{ asset('bundles/sgdatatables/js/pipeline.js') }}\"></script>

        <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
        <script src=\"{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}\"></script>
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>

<div class=\"container\" style=\"padding-top: 2%; padding-bottom:3%; \">


    {% block body %}

    {% endblock %}



</div>




</body>
</html>", "::layout.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/layout.html.twig");
    }
}
