<?php

/* ReportLayout.html.twig */
class __TwigTemplate_5149f679d0fc4c30e81db5adf01981d88a93f36b2edc3cfc74c5840f9275f9ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9dd830eb80f329dae356115a9ee97ac907a067bf84ac7b253b8cd4ebc4fd5d0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dd830eb80f329dae356115a9ee97ac907a067bf84ac7b253b8cd4ebc4fd5d0f->enter($__internal_9dd830eb80f329dae356115a9ee97ac907a067bf84ac7b253b8cd4ebc4fd5d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReportLayout.html.twig"));

        $__internal_4715f04e6e16bbdb3a57953f6c23b23c424256721b758e6b6cf0cf2693c5f961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4715f04e6e16bbdb3a57953f6c23b23c424256721b758e6b6cf0cf2693c5f961->enter($__internal_4715f04e6e16bbdb3a57953f6c23b23c424256721b758e6b6cf0cf2693c5f961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReportLayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        // line 43
        echo "
</head>
<body>


<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-lg-12\">

            ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "
        </div>

    </div>

</div>

";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 70
        echo "</body>
</html>

";
        
        $__internal_9dd830eb80f329dae356115a9ee97ac907a067bf84ac7b253b8cd4ebc4fd5d0f->leave($__internal_9dd830eb80f329dae356115a9ee97ac907a067bf84ac7b253b8cd4ebc4fd5d0f_prof);

        
        $__internal_4715f04e6e16bbdb3a57953f6c23b23c424256721b758e6b6cf0cf2693c5f961->leave($__internal_4715f04e6e16bbdb3a57953f6c23b23c424256721b758e6b6cf0cf2693c5f961_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_b031b403356e3e3868a0dae3e599136e08414704d3312a9245a38dc472e9616c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b031b403356e3e3868a0dae3e599136e08414704d3312a9245a38dc472e9616c->enter($__internal_b031b403356e3e3868a0dae3e599136e08414704d3312a9245a38dc472e9616c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc37383307217eccd9e34c59aee78453d829873918fc02b5ebe37d694d15b3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc37383307217eccd9e34c59aee78453d829873918fc02b5ebe37d694d15b3dc->enter($__internal_fc37383307217eccd9e34c59aee78453d829873918fc02b5ebe37d694d15b3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fc37383307217eccd9e34c59aee78453d829873918fc02b5ebe37d694d15b3dc->leave($__internal_fc37383307217eccd9e34c59aee78453d829873918fc02b5ebe37d694d15b3dc_prof);

        
        $__internal_b031b403356e3e3868a0dae3e599136e08414704d3312a9245a38dc472e9616c->leave($__internal_b031b403356e3e3868a0dae3e599136e08414704d3312a9245a38dc472e9616c_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_fcca2eeea47f60a55d7d7d7c002190c59861ae7307d49aaae672ac5be73d6809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcca2eeea47f60a55d7d7d7c002190c59861ae7307d49aaae672ac5be73d6809->enter($__internal_fcca2eeea47f60a55d7d7d7c002190c59861ae7307d49aaae672ac5be73d6809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_cf47a0236ea843a60ec983b9ed6925bd9c27134b1b7f4dfdcc049f1b6d927613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf47a0236ea843a60ec983b9ed6925bd9c27134b1b7f4dfdcc049f1b6d927613->enter($__internal_cf47a0236ea843a60ec983b9ed6925bd9c27134b1b7f4dfdcc049f1b6d927613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "

    <!-- Bootstrap -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/default.css")), "html", null, true);
        echo "\">

    <link href=\"https://fonts.googleapis.com/css?family=Quicksand:700\" rel=\"stylesheet\">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
<style>
    html, body {
        font-family: 'Quicksand', sans-serif;

        color: black;
        height: 100%;
    }

    table { page-break-inside:auto }
    tr    { page-break-inside:avoid; page-break-after:auto }
    thead { display:table-header-group }
    tfoot { display:table-footer-group }

</style>

";
        
        $__internal_cf47a0236ea843a60ec983b9ed6925bd9c27134b1b7f4dfdcc049f1b6d927613->leave($__internal_cf47a0236ea843a60ec983b9ed6925bd9c27134b1b7f4dfdcc049f1b6d927613_prof);

        
        $__internal_fcca2eeea47f60a55d7d7d7c002190c59861ae7307d49aaae672ac5be73d6809->leave($__internal_fcca2eeea47f60a55d7d7d7c002190c59861ae7307d49aaae672ac5be73d6809_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_50b97aaaca93b7d4764f0abe540421f3bda4906bc3ddea2de4070b1fc46a3924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b97aaaca93b7d4764f0abe540421f3bda4906bc3ddea2de4070b1fc46a3924->enter($__internal_50b97aaaca93b7d4764f0abe540421f3bda4906bc3ddea2de4070b1fc46a3924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2c67b61a12115162343e1e2664ab6c81a00cff3697fbe65a4eb0f671236bc66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c67b61a12115162343e1e2664ab6c81a00cff3697fbe65a4eb0f671236bc66->enter($__internal_e2c67b61a12115162343e1e2664ab6c81a00cff3697fbe65a4eb0f671236bc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "
            ";
        
        $__internal_e2c67b61a12115162343e1e2664ab6c81a00cff3697fbe65a4eb0f671236bc66->leave($__internal_e2c67b61a12115162343e1e2664ab6c81a00cff3697fbe65a4eb0f671236bc66_prof);

        
        $__internal_50b97aaaca93b7d4764f0abe540421f3bda4906bc3ddea2de4070b1fc46a3924->leave($__internal_50b97aaaca93b7d4764f0abe540421f3bda4906bc3ddea2de4070b1fc46a3924_prof);

    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3d44e27955f832c6bcc62d86b439cfca1bec46982d72e469f0a36a7006242830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d44e27955f832c6bcc62d86b439cfca1bec46982d72e469f0a36a7006242830->enter($__internal_3d44e27955f832c6bcc62d86b439cfca1bec46982d72e469f0a36a7006242830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_ac6526ca375b48d328658e5b141962ea7818db4d2c4dc1b7a5be582d6c002621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6526ca375b48d328658e5b141962ea7818db4d2c4dc1b7a5be582d6c002621->enter($__internal_ac6526ca375b48d328658e5b141962ea7818db4d2c4dc1b7a5be582d6c002621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 64
        echo "
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.9.1.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/default.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_ac6526ca375b48d328658e5b141962ea7818db4d2c4dc1b7a5be582d6c002621->leave($__internal_ac6526ca375b48d328658e5b141962ea7818db4d2c4dc1b7a5be582d6c002621_prof);

        
        $__internal_3d44e27955f832c6bcc62d86b439cfca1bec46982d72e469f0a36a7006242830->leave($__internal_3d44e27955f832c6bcc62d86b439cfca1bec46982d72e469f0a36a7006242830_prof);

    }

    public function getTemplateName()
    {
        return "ReportLayout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  196 => 67,  192 => 66,  188 => 65,  185 => 64,  176 => 63,  165 => 54,  156 => 53,  119 => 16,  114 => 14,  109 => 11,  100 => 10,  83 => 8,  70 => 70,  68 => 63,  59 => 56,  57 => 53,  45 => 43,  43 => 10,  38 => 8,  29 => 1,);
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
<html lang=\"en\">
<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}{% endblock %}</title>

{% block header %}


    <!-- Bootstrap -->
    <link href=\"{{absolute_url(asset('css/bootstrap.min.css')) }}\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{absolute_url(asset('css/default.css')) }}\">

    <link href=\"https://fonts.googleapis.com/css?family=Quicksand:700\" rel=\"stylesheet\">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
<style>
    html, body {
        font-family: 'Quicksand', sans-serif;

        color: black;
        height: 100%;
    }

    table { page-break-inside:auto }
    tr    { page-break-inside:avoid; page-break-after:auto }
    thead { display:table-header-group }
    tfoot { display:table-footer-group }

</style>

{% endblock %}

</head>
<body>


<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-lg-12\">

            {% block body %}

            {% endblock %}

        </div>

    </div>

</div>

{% block footer %}

    <script src=\"{{absolute_url(asset('js/jquery-1.9.1.js')) }}\"></script>
    <script src=\"{{absolute_url(asset('js/bootstrap.min.js')) }}\"></script>
    <script src=\"{{absolute_url(asset('js/default.js')) }}\"></script>

{% endblock %}
</body>
</html>

", "ReportLayout.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\ReportLayout.html.twig");
    }
}
