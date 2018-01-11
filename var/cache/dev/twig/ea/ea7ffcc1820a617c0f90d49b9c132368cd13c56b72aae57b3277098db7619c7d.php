<?php

/* :mainpages:berichtenDozentenFilterScreen.html.twig */
class __TwigTemplate_31f4ec3e59a3da3206f82b8aea81a124b2d3a305f18b430ca82bd3b42245e96f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", ":mainpages:berichtenDozentenFilterScreen.html.twig", 1);
        $this->blocks = array(
            'DozentNumber' => array($this, 'block_DozentNumber'),
            'GroupNumber' => array($this, 'block_GroupNumber'),
            'header' => array($this, 'block_header'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da4fb72ed8bb800133c447110d3e988ae54452803f175866cf7f234cd93be42c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4fb72ed8bb800133c447110d3e988ae54452803f175866cf7f234cd93be42c->enter($__internal_da4fb72ed8bb800133c447110d3e988ae54452803f175866cf7f234cd93be42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:berichtenDozentenFilterScreen.html.twig"));

        $__internal_37859534db1a33744fef5bc8efbaf0dad85461700c2a6ae10c087b7044de40de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37859534db1a33744fef5bc8efbaf0dad85461700c2a6ae10c087b7044de40de->enter($__internal_37859534db1a33744fef5bc8efbaf0dad85461700c2a6ae10c087b7044de40de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:berichtenDozentenFilterScreen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da4fb72ed8bb800133c447110d3e988ae54452803f175866cf7f234cd93be42c->leave($__internal_da4fb72ed8bb800133c447110d3e988ae54452803f175866cf7f234cd93be42c_prof);

        
        $__internal_37859534db1a33744fef5bc8efbaf0dad85461700c2a6ae10c087b7044de40de->leave($__internal_37859534db1a33744fef5bc8efbaf0dad85461700c2a6ae10c087b7044de40de_prof);

    }

    // line 3
    public function block_DozentNumber($context, array $blocks = array())
    {
        $__internal_7a24628b3d5ffdcd5a69f364f5c02c13f0a69f3c04996d0876569a3ccfd5777b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a24628b3d5ffdcd5a69f364f5c02c13f0a69f3c04996d0876569a3ccfd5777b->enter($__internal_7a24628b3d5ffdcd5a69f364f5c02c13f0a69f3c04996d0876569a3ccfd5777b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "DozentNumber"));

        $__internal_c40563b8eb1cf4959716f0c6e714ee4536620986844be7ae0b2c24eef4a3ee17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40563b8eb1cf4959716f0c6e714ee4536620986844be7ae0b2c24eef4a3ee17->enter($__internal_c40563b8eb1cf4959716f0c6e714ee4536620986844be7ae0b2c24eef4a3ee17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "DozentNumber"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, ($context["dozentnumber"] ?? $this->getContext($context, "dozentnumber")), "html", null, true);
        echo "
";
        
        $__internal_c40563b8eb1cf4959716f0c6e714ee4536620986844be7ae0b2c24eef4a3ee17->leave($__internal_c40563b8eb1cf4959716f0c6e714ee4536620986844be7ae0b2c24eef4a3ee17_prof);

        
        $__internal_7a24628b3d5ffdcd5a69f364f5c02c13f0a69f3c04996d0876569a3ccfd5777b->leave($__internal_7a24628b3d5ffdcd5a69f364f5c02c13f0a69f3c04996d0876569a3ccfd5777b_prof);

    }

    // line 6
    public function block_GroupNumber($context, array $blocks = array())
    {
        $__internal_57cf19b7ff13a4c8b4dad7aaadb5e17c289c0ea6905de4bc62ab339eb1efdbaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57cf19b7ff13a4c8b4dad7aaadb5e17c289c0ea6905de4bc62ab339eb1efdbaf->enter($__internal_57cf19b7ff13a4c8b4dad7aaadb5e17c289c0ea6905de4bc62ab339eb1efdbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GroupNumber"));

        $__internal_625d714126dce35f70da63580d3f2b634515d4d2d1d432a8978a68e80f21272d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_625d714126dce35f70da63580d3f2b634515d4d2d1d432a8978a68e80f21272d->enter($__internal_625d714126dce35f70da63580d3f2b634515d4d2d1d432a8978a68e80f21272d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GroupNumber"));

        // line 7
        echo "    ";
        echo twig_escape_filter($this->env, ($context["groupnumber"] ?? $this->getContext($context, "groupnumber")), "html", null, true);
        echo "
";
        
        $__internal_625d714126dce35f70da63580d3f2b634515d4d2d1d432a8978a68e80f21272d->leave($__internal_625d714126dce35f70da63580d3f2b634515d4d2d1d432a8978a68e80f21272d_prof);

        
        $__internal_57cf19b7ff13a4c8b4dad7aaadb5e17c289c0ea6905de4bc62ab339eb1efdbaf->leave($__internal_57cf19b7ff13a4c8b4dad7aaadb5e17c289c0ea6905de4bc62ab339eb1efdbaf_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_f792ca0a58d9dbd360c3fb5fc3be53fe362995c15c7d813a87a90a92609cd347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f792ca0a58d9dbd360c3fb5fc3be53fe362995c15c7d813a87a90a92609cd347->enter($__internal_f792ca0a58d9dbd360c3fb5fc3be53fe362995c15c7d813a87a90a92609cd347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_87b4ca82482098c91b8af5d604c88263f229fbe43dee2f6af2f6f8c7b2429c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b4ca82482098c91b8af5d604c88263f229fbe43dee2f6af2f6f8c7b2429c03->enter($__internal_87b4ca82482098c91b8af5d604c88263f229fbe43dee2f6af2f6f8c7b2429c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 10
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Admin</title>

    <!-- Bootstrap -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/default.css"), "html", null, true);
        echo "\">

    <link href=\"https://fonts.googleapis.com/css?family=Quicksand:700\" rel=\"stylesheet\">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->


";
        
        $__internal_87b4ca82482098c91b8af5d604c88263f229fbe43dee2f6af2f6f8c7b2429c03->leave($__internal_87b4ca82482098c91b8af5d604c88263f229fbe43dee2f6af2f6f8c7b2429c03_prof);

        
        $__internal_f792ca0a58d9dbd360c3fb5fc3be53fe362995c15c7d813a87a90a92609cd347->leave($__internal_f792ca0a58d9dbd360c3fb5fc3be53fe362995c15c7d813a87a90a92609cd347_prof);

    }

    // line 32
    public function block_title($context, array $blocks = array())
    {
        $__internal_02b78079b4ca9106d2434fe91e79944ad9d1014212023366175b4f88ee2191d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b78079b4ca9106d2434fe91e79944ad9d1014212023366175b4f88ee2191d1->enter($__internal_02b78079b4ca9106d2434fe91e79944ad9d1014212023366175b4f88ee2191d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_95a4a50822ebe1d92444bbbbbf5f55969c22ea50ae9351f3b3ff9919d3e3ea7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a4a50822ebe1d92444bbbbbf5f55969c22ea50ae9351f3b3ff9919d3e3ea7a->enter($__internal_95a4a50822ebe1d92444bbbbbf5f55969c22ea50ae9351f3b3ff9919d3e3ea7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 33
        echo "    Dashboard
";
        
        $__internal_95a4a50822ebe1d92444bbbbbf5f55969c22ea50ae9351f3b3ff9919d3e3ea7a->leave($__internal_95a4a50822ebe1d92444bbbbbf5f55969c22ea50ae9351f3b3ff9919d3e3ea7a_prof);

        
        $__internal_02b78079b4ca9106d2434fe91e79944ad9d1014212023366175b4f88ee2191d1->leave($__internal_02b78079b4ca9106d2434fe91e79944ad9d1014212023366175b4f88ee2191d1_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_276df79969c8af4f66e187907518bd5dc36623810d6b47d6cd527960d871fcac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276df79969c8af4f66e187907518bd5dc36623810d6b47d6cd527960d871fcac->enter($__internal_276df79969c8af4f66e187907518bd5dc36623810d6b47d6cd527960d871fcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44ca6af1ca85b903f469e062e5c6ab2a2a668552cd185d32f3029bf204f9e585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ca6af1ca85b903f469e062e5c6ab2a2a668552cd185d32f3029bf204f9e585->enter($__internal_44ca6af1ca85b903f469e062e5c6ab2a2a668552cd185d32f3029bf204f9e585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "

    <div class=\"row\">
        <div class=\"col-lg-12\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Berichten der Dozenten</h3>
                </div>
                <div class=\"panel-body \">

                    <div class=\"form-wrapper\">
                        ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["SearchForm"] ?? $this->getContext($context, "SearchForm")), 'form_start', array("attr" => array("target" => "_blank"), "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("draw-table"), "method" => "POST"));
        echo "
                        <div class=\"form-group\">
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["SearchForm"] ?? $this->getContext($context, "SearchForm")), "Dozent", array()), 'row');
        echo "
                        </div>
                        <div class=\"form-group\">
                            <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                                <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["SearchForm"] ?? $this->getContext($context, "SearchForm")), "fromDate", array()), 'row');
        echo "
                            </div>
                        </div>


                        <div class=\"form-group\">
                            <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                                <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["SearchForm"] ?? $this->getContext($context, "SearchForm")), "toDate", array()), 'row');
        echo "
                            </div>
                        </div>

                        <div class=\"clearfix\">
                            <button type=\"submit\" class=\"btn btn-primary pull-right\" > exporteren </button>
                        </div>
                        ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["SearchForm"] ?? $this->getContext($context, "SearchForm")), 'form_end', array("render_rest" => false));
        echo "

                    </div>
                </div>

            </div>

        </div>
    </div>

";
        
        $__internal_44ca6af1ca85b903f469e062e5c6ab2a2a668552cd185d32f3029bf204f9e585->leave($__internal_44ca6af1ca85b903f469e062e5c6ab2a2a668552cd185d32f3029bf204f9e585_prof);

        
        $__internal_276df79969c8af4f66e187907518bd5dc36623810d6b47d6cd527960d871fcac->leave($__internal_276df79969c8af4f66e187907518bd5dc36623810d6b47d6cd527960d871fcac_prof);

    }

    // line 84
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c37e77484c623d7110cc8ee3d5e8ea76eb88eb278be23e2648d7015fa8bfdd2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c37e77484c623d7110cc8ee3d5e8ea76eb88eb278be23e2648d7015fa8bfdd2a->enter($__internal_c37e77484c623d7110cc8ee3d5e8ea76eb88eb278be23e2648d7015fa8bfdd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_a74f6cce5af96bc0aacc54d4608a425cf10eca8c79c8943e7872138a34b45d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74f6cce5af96bc0aacc54d4608a425cf10eca8c79c8943e7872138a34b45d9a->enter($__internal_a74f6cce5af96bc0aacc54d4608a425cf10eca8c79c8943e7872138a34b45d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 85
        echo "
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/default.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.de.min.js"), "html", null, true);
        echo "\"></script>


    <script>
        \$(document).ready(function () {
            \$('.js-datepicker').datepicker({language: 'de'});
            \$('[data-toggle=\"popover\"]').popover();

        });
    </script>


";
        
        $__internal_a74f6cce5af96bc0aacc54d4608a425cf10eca8c79c8943e7872138a34b45d9a->leave($__internal_a74f6cce5af96bc0aacc54d4608a425cf10eca8c79c8943e7872138a34b45d9a_prof);

        
        $__internal_c37e77484c623d7110cc8ee3d5e8ea76eb88eb278be23e2648d7015fa8bfdd2a->leave($__internal_c37e77484c623d7110cc8ee3d5e8ea76eb88eb278be23e2648d7015fa8bfdd2a_prof);

    }

    public function getTemplateName()
    {
        return ":mainpages:berichtenDozentenFilterScreen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 90,  260 => 89,  256 => 88,  252 => 87,  248 => 86,  245 => 85,  236 => 84,  215 => 70,  205 => 63,  194 => 55,  186 => 50,  181 => 48,  167 => 36,  158 => 35,  147 => 33,  138 => 32,  114 => 18,  110 => 17,  106 => 16,  98 => 10,  89 => 9,  76 => 7,  67 => 6,  54 => 4,  45 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'main.html.twig' %}

{% block DozentNumber %}
    {{ dozentnumber }}
{% endblock %}
{% block GroupNumber %}
    {{ groupnumber }}
{% endblock %}
{% block header %}
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Admin</title>

    <!-- Bootstrap -->
    <link href=\"{{asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('css/bootstrap-datepicker.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/default.css') }}\">

    <link href=\"https://fonts.googleapis.com/css?family=Quicksand:700\" rel=\"stylesheet\">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->


{% endblock %}
{% block title %}
    Dashboard
{% endblock %}
{% block body %}


    <div class=\"row\">
        <div class=\"col-lg-12\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Berichten der Dozenten</h3>
                </div>
                <div class=\"panel-body \">

                    <div class=\"form-wrapper\">
                        {{ form_start(SearchForm,{ 'attr' : {'target': '_blank'},'action': path('draw-table'), 'method': 'POST'}) }}
                        <div class=\"form-group\">
                            {{ form_row(SearchForm.Dozent) }}
                        </div>
                        <div class=\"form-group\">
                            <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                                <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
                                {{ form_row(SearchForm.fromDate) }}
                            </div>
                        </div>


                        <div class=\"form-group\">
                            <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                                <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
                                {{ form_row(SearchForm.toDate) }}
                            </div>
                        </div>

                        <div class=\"clearfix\">
                            <button type=\"submit\" class=\"btn btn-primary pull-right\" > exporteren </button>
                        </div>
                        {{ form_end(SearchForm, {'render_rest': false}) }}

                    </div>
                </div>

            </div>

        </div>
    </div>

{% endblock %}



{% block footer %}

    <script src=\"{{asset('js/jquery-1.9.1.js') }}\"></script>
    <script src=\"{{asset('js/bootstrap.min.js') }}\"></script>
    <script src=\"{{asset('js/bootstrap-datepicker.min.js') }}\"></script>
    <script src=\"{{asset('js/default.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/bootstrap-datepicker.de.min.js') }}\"></script>


    <script>
        \$(document).ready(function () {
            \$('.js-datepicker').datepicker({language: 'de'});
            \$('[data-toggle=\"popover\"]').popover();

        });
    </script>


{% endblock %}


", ":mainpages:berichtenDozentenFilterScreen.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/mainpages/berichtenDozentenFilterScreen.html.twig");
    }
}
