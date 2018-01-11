<?php

/* layout.html.twig */
class __TwigTemplate_5305cfd82ecb81cdd9449c9d3d23516ddfb0f6ef79347bf5bf30a450ed744878 extends Twig_Template
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
        $__internal_78747bfaaeff2b8fdabc83b72d6a17761ac5aec13b9d1ae28344fb9785d4d598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78747bfaaeff2b8fdabc83b72d6a17761ac5aec13b9d1ae28344fb9785d4d598->enter($__internal_78747bfaaeff2b8fdabc83b72d6a17761ac5aec13b9d1ae28344fb9785d4d598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_925d4d7b5231088d2dcdbbbfab2ee36d39c94d3e2436f9d714aa1cd056eed7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925d4d7b5231088d2dcdbbbfab2ee36d39c94d3e2436f9d714aa1cd056eed7cf->enter($__internal_925d4d7b5231088d2dcdbbbfab2ee36d39c94d3e2436f9d714aa1cd056eed7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_78747bfaaeff2b8fdabc83b72d6a17761ac5aec13b9d1ae28344fb9785d4d598->leave($__internal_78747bfaaeff2b8fdabc83b72d6a17761ac5aec13b9d1ae28344fb9785d4d598_prof);

        
        $__internal_925d4d7b5231088d2dcdbbbfab2ee36d39c94d3e2436f9d714aa1cd056eed7cf->leave($__internal_925d4d7b5231088d2dcdbbbfab2ee36d39c94d3e2436f9d714aa1cd056eed7cf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d5482d7f4e232461534d26a6577c7b07b138350affabcde7c9e6ba8b781928d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5482d7f4e232461534d26a6577c7b07b138350affabcde7c9e6ba8b781928d->enter($__internal_8d5482d7f4e232461534d26a6577c7b07b138350affabcde7c9e6ba8b781928d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9f4ccf5e5e0a53e99b58d358e9b3afb36be5af54f524e6be7270dcf312849575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4ccf5e5e0a53e99b58d358e9b3afb36be5af54f524e6be7270dcf312849575->enter($__internal_9f4ccf5e5e0a53e99b58d358e9b3afb36be5af54f524e6be7270dcf312849575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SgDatatablesBundleDev";
        
        $__internal_9f4ccf5e5e0a53e99b58d358e9b3afb36be5af54f524e6be7270dcf312849575->leave($__internal_9f4ccf5e5e0a53e99b58d358e9b3afb36be5af54f524e6be7270dcf312849575_prof);

        
        $__internal_8d5482d7f4e232461534d26a6577c7b07b138350affabcde7c9e6ba8b781928d->leave($__internal_8d5482d7f4e232461534d26a6577c7b07b138350affabcde7c9e6ba8b781928d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00f931a84ac4cd1ec4880b226a74e06902b92c44924e0811382f6becfe9099e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f931a84ac4cd1ec4880b226a74e06902b92c44924e0811382f6becfe9099e6->enter($__internal_00f931a84ac4cd1ec4880b226a74e06902b92c44924e0811382f6becfe9099e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9c51fce62bb4cf72e38daf90140b29e5fb3513de14811b2ee0c9bfab8ca54b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c51fce62bb4cf72e38daf90140b29e5fb3513de14811b2ee0c9bfab8ca54b76->enter($__internal_9c51fce62bb4cf72e38daf90140b29e5fb3513de14811b2ee0c9bfab8ca54b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/v/bs/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/fc-3.2.2/fh-3.1.2/r-2.1.0/datatables.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.rawgit.com/noelboss/featherlight/1.7.1/release/featherlight.min.css\">
    ";
        
        $__internal_9c51fce62bb4cf72e38daf90140b29e5fb3513de14811b2ee0c9bfab8ca54b76->leave($__internal_9c51fce62bb4cf72e38daf90140b29e5fb3513de14811b2ee0c9bfab8ca54b76_prof);

        
        $__internal_00f931a84ac4cd1ec4880b226a74e06902b92c44924e0811382f6becfe9099e6->leave($__internal_00f931a84ac4cd1ec4880b226a74e06902b92c44924e0811382f6becfe9099e6_prof);

    }

    // line 14
    public function block_head_javascripts($context, array $blocks = array())
    {
        $__internal_9070ac70597f6ae6f5d677d209abc8224231464161de01f2ecb751a8e2f76533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9070ac70597f6ae6f5d677d209abc8224231464161de01f2ecb751a8e2f76533->enter($__internal_9070ac70597f6ae6f5d677d209abc8224231464161de01f2ecb751a8e2f76533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascripts"));

        $__internal_a7f641a0c5a10b403eb114fba74ac0ed15e9fae4b3b7184214da712d30b0118a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f641a0c5a10b403eb114fba74ac0ed15e9fae4b3b7184214da712d30b0118a->enter($__internal_a7f641a0c5a10b403eb114fba74ac0ed15e9fae4b3b7184214da712d30b0118a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascripts"));

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
        
        $__internal_a7f641a0c5a10b403eb114fba74ac0ed15e9fae4b3b7184214da712d30b0118a->leave($__internal_a7f641a0c5a10b403eb114fba74ac0ed15e9fae4b3b7184214da712d30b0118a_prof);

        
        $__internal_9070ac70597f6ae6f5d677d209abc8224231464161de01f2ecb751a8e2f76533->leave($__internal_9070ac70597f6ae6f5d677d209abc8224231464161de01f2ecb751a8e2f76533_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_108f1d0aa1d6a1489b9995eccf2980ca495107768e67c3c220c9fb46662d9409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108f1d0aa1d6a1489b9995eccf2980ca495107768e67c3c220c9fb46662d9409->enter($__internal_108f1d0aa1d6a1489b9995eccf2980ca495107768e67c3c220c9fb46662d9409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60274a4c068b64e585a68fc99e0dc63633a949e3c1e816f8589f647a29c53c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60274a4c068b64e585a68fc99e0dc63633a949e3c1e816f8589f647a29c53c36->enter($__internal_60274a4c068b64e585a68fc99e0dc63633a949e3c1e816f8589f647a29c53c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "
    ";
        
        $__internal_60274a4c068b64e585a68fc99e0dc63633a949e3c1e816f8589f647a29c53c36->leave($__internal_60274a4c068b64e585a68fc99e0dc63633a949e3c1e816f8589f647a29c53c36_prof);

        
        $__internal_108f1d0aa1d6a1489b9995eccf2980ca495107768e67c3c220c9fb46662d9409->leave($__internal_108f1d0aa1d6a1489b9995eccf2980ca495107768e67c3c220c9fb46662d9409_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
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
</html>", "layout.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\layout.html.twig");
    }
}
