<?php

/* mainpages/berichtenDozentenFilterScreen.html.twig */
class __TwigTemplate_44f0369c773acaea03da1a0f46f7f769ebb9547837a7f355c248bd8a48ec8a6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "mainpages/berichtenDozentenFilterScreen.html.twig", 1);
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
        $__internal_f08ecdaa8a2358e4bb3a577be4a9cd2f92193d23addd3cbb5e59296390eb938b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08ecdaa8a2358e4bb3a577be4a9cd2f92193d23addd3cbb5e59296390eb938b->enter($__internal_f08ecdaa8a2358e4bb3a577be4a9cd2f92193d23addd3cbb5e59296390eb938b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/berichtenDozentenFilterScreen.html.twig"));

        $__internal_7a93f019dccae3395276d91a075622f3fc93d452996df7498a3cf4a1383175e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a93f019dccae3395276d91a075622f3fc93d452996df7498a3cf4a1383175e9->enter($__internal_7a93f019dccae3395276d91a075622f3fc93d452996df7498a3cf4a1383175e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/berichtenDozentenFilterScreen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f08ecdaa8a2358e4bb3a577be4a9cd2f92193d23addd3cbb5e59296390eb938b->leave($__internal_f08ecdaa8a2358e4bb3a577be4a9cd2f92193d23addd3cbb5e59296390eb938b_prof);

        
        $__internal_7a93f019dccae3395276d91a075622f3fc93d452996df7498a3cf4a1383175e9->leave($__internal_7a93f019dccae3395276d91a075622f3fc93d452996df7498a3cf4a1383175e9_prof);

    }

    // line 3
    public function block_DozentNumber($context, array $blocks = array())
    {
        $__internal_78bc4513f16d646c690c8f985756cf91a187b6cee7ca247b4460a9a4d7f3b8bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78bc4513f16d646c690c8f985756cf91a187b6cee7ca247b4460a9a4d7f3b8bc->enter($__internal_78bc4513f16d646c690c8f985756cf91a187b6cee7ca247b4460a9a4d7f3b8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "DozentNumber"));

        $__internal_4662a1163c48579760874b8acfb8881acd91454636c35fb38fe1fb5eda0e8a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4662a1163c48579760874b8acfb8881acd91454636c35fb38fe1fb5eda0e8a37->enter($__internal_4662a1163c48579760874b8acfb8881acd91454636c35fb38fe1fb5eda0e8a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "DozentNumber"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, ($context["dozentnumber"] ?? $this->getContext($context, "dozentnumber")), "html", null, true);
        echo "
";
        
        $__internal_4662a1163c48579760874b8acfb8881acd91454636c35fb38fe1fb5eda0e8a37->leave($__internal_4662a1163c48579760874b8acfb8881acd91454636c35fb38fe1fb5eda0e8a37_prof);

        
        $__internal_78bc4513f16d646c690c8f985756cf91a187b6cee7ca247b4460a9a4d7f3b8bc->leave($__internal_78bc4513f16d646c690c8f985756cf91a187b6cee7ca247b4460a9a4d7f3b8bc_prof);

    }

    // line 6
    public function block_GroupNumber($context, array $blocks = array())
    {
        $__internal_0a12dae148742e49daf38897050570a5da7384736f4de0ad001ac7901fcbb34c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a12dae148742e49daf38897050570a5da7384736f4de0ad001ac7901fcbb34c->enter($__internal_0a12dae148742e49daf38897050570a5da7384736f4de0ad001ac7901fcbb34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GroupNumber"));

        $__internal_29549aee48f8e715423662225ec4c18ecf95d7c985157358f35d89265f121cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29549aee48f8e715423662225ec4c18ecf95d7c985157358f35d89265f121cfe->enter($__internal_29549aee48f8e715423662225ec4c18ecf95d7c985157358f35d89265f121cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GroupNumber"));

        // line 7
        echo "    ";
        echo twig_escape_filter($this->env, ($context["groupnumber"] ?? $this->getContext($context, "groupnumber")), "html", null, true);
        echo "
";
        
        $__internal_29549aee48f8e715423662225ec4c18ecf95d7c985157358f35d89265f121cfe->leave($__internal_29549aee48f8e715423662225ec4c18ecf95d7c985157358f35d89265f121cfe_prof);

        
        $__internal_0a12dae148742e49daf38897050570a5da7384736f4de0ad001ac7901fcbb34c->leave($__internal_0a12dae148742e49daf38897050570a5da7384736f4de0ad001ac7901fcbb34c_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_5358b5bf585de997f7647fed51f88983be8e916f30cb9b4e2ab5214add8f7c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5358b5bf585de997f7647fed51f88983be8e916f30cb9b4e2ab5214add8f7c4f->enter($__internal_5358b5bf585de997f7647fed51f88983be8e916f30cb9b4e2ab5214add8f7c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_ea56f7fa8017ec92721fd4e73c759a1920a92b817aedd496f229955608ea0aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea56f7fa8017ec92721fd4e73c759a1920a92b817aedd496f229955608ea0aa2->enter($__internal_ea56f7fa8017ec92721fd4e73c759a1920a92b817aedd496f229955608ea0aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_ea56f7fa8017ec92721fd4e73c759a1920a92b817aedd496f229955608ea0aa2->leave($__internal_ea56f7fa8017ec92721fd4e73c759a1920a92b817aedd496f229955608ea0aa2_prof);

        
        $__internal_5358b5bf585de997f7647fed51f88983be8e916f30cb9b4e2ab5214add8f7c4f->leave($__internal_5358b5bf585de997f7647fed51f88983be8e916f30cb9b4e2ab5214add8f7c4f_prof);

    }

    // line 32
    public function block_title($context, array $blocks = array())
    {
        $__internal_a918e291521dcff2e4d17e198ccdf6a6403288d7064cf1135848d82318d7943c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a918e291521dcff2e4d17e198ccdf6a6403288d7064cf1135848d82318d7943c->enter($__internal_a918e291521dcff2e4d17e198ccdf6a6403288d7064cf1135848d82318d7943c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b72cec71a24c3a59f192c3612b4cf65fe9385d84a860c8388db1384ec8771f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72cec71a24c3a59f192c3612b4cf65fe9385d84a860c8388db1384ec8771f60->enter($__internal_b72cec71a24c3a59f192c3612b4cf65fe9385d84a860c8388db1384ec8771f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 33
        echo "    Dashboard
";
        
        $__internal_b72cec71a24c3a59f192c3612b4cf65fe9385d84a860c8388db1384ec8771f60->leave($__internal_b72cec71a24c3a59f192c3612b4cf65fe9385d84a860c8388db1384ec8771f60_prof);

        
        $__internal_a918e291521dcff2e4d17e198ccdf6a6403288d7064cf1135848d82318d7943c->leave($__internal_a918e291521dcff2e4d17e198ccdf6a6403288d7064cf1135848d82318d7943c_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_5948b3d7d921d26264416edfbdc8ccb42087bcc94ed6c5a7ba02cc3ebbfa5781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5948b3d7d921d26264416edfbdc8ccb42087bcc94ed6c5a7ba02cc3ebbfa5781->enter($__internal_5948b3d7d921d26264416edfbdc8ccb42087bcc94ed6c5a7ba02cc3ebbfa5781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c266873772804b0365b81dfea46ff6c862e9cb955fe8868584f17557fb864a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c266873772804b0365b81dfea46ff6c862e9cb955fe8868584f17557fb864a4e->enter($__internal_c266873772804b0365b81dfea46ff6c862e9cb955fe8868584f17557fb864a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c266873772804b0365b81dfea46ff6c862e9cb955fe8868584f17557fb864a4e->leave($__internal_c266873772804b0365b81dfea46ff6c862e9cb955fe8868584f17557fb864a4e_prof);

        
        $__internal_5948b3d7d921d26264416edfbdc8ccb42087bcc94ed6c5a7ba02cc3ebbfa5781->leave($__internal_5948b3d7d921d26264416edfbdc8ccb42087bcc94ed6c5a7ba02cc3ebbfa5781_prof);

    }

    // line 84
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6561a00076c17d552a28afc115ee2191c0fd2f9bb889f0295ccadd829112f6fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6561a00076c17d552a28afc115ee2191c0fd2f9bb889f0295ccadd829112f6fd->enter($__internal_6561a00076c17d552a28afc115ee2191c0fd2f9bb889f0295ccadd829112f6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_832ac646fdb195b517d90fc099a288cac165dfea41c8bc09948fb4582b0513bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832ac646fdb195b517d90fc099a288cac165dfea41c8bc09948fb4582b0513bf->enter($__internal_832ac646fdb195b517d90fc099a288cac165dfea41c8bc09948fb4582b0513bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_832ac646fdb195b517d90fc099a288cac165dfea41c8bc09948fb4582b0513bf->leave($__internal_832ac646fdb195b517d90fc099a288cac165dfea41c8bc09948fb4582b0513bf_prof);

        
        $__internal_6561a00076c17d552a28afc115ee2191c0fd2f9bb889f0295ccadd829112f6fd->leave($__internal_6561a00076c17d552a28afc115ee2191c0fd2f9bb889f0295ccadd829112f6fd_prof);

    }

    public function getTemplateName()
    {
        return "mainpages/berichtenDozentenFilterScreen.html.twig";
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


", "mainpages/berichtenDozentenFilterScreen.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\mainpages\\berichtenDozentenFilterScreen.html.twig");
    }
}
