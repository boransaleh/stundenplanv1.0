<?php

/* mainpages/dashboard.html.twig */
class __TwigTemplate_125f241c43472074e76e10278cf49bf66dda6408938c935b76038217b9ef23f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "mainpages/dashboard.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95470ce0103f4f0c8209746fdb17cd0e168f96e21f249fd55265896bf5ffa0bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95470ce0103f4f0c8209746fdb17cd0e168f96e21f249fd55265896bf5ffa0bb->enter($__internal_95470ce0103f4f0c8209746fdb17cd0e168f96e21f249fd55265896bf5ffa0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/dashboard.html.twig"));

        $__internal_e956a592fda42af12b66761490a7b4b6226d4595a5c2e230c37dfd35931a16d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e956a592fda42af12b66761490a7b4b6226d4595a5c2e230c37dfd35931a16d0->enter($__internal_e956a592fda42af12b66761490a7b4b6226d4595a5c2e230c37dfd35931a16d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95470ce0103f4f0c8209746fdb17cd0e168f96e21f249fd55265896bf5ffa0bb->leave($__internal_95470ce0103f4f0c8209746fdb17cd0e168f96e21f249fd55265896bf5ffa0bb_prof);

        
        $__internal_e956a592fda42af12b66761490a7b4b6226d4595a5c2e230c37dfd35931a16d0->leave($__internal_e956a592fda42af12b66761490a7b4b6226d4595a5c2e230c37dfd35931a16d0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8eb79324d6fbb0dfeff68cf7b980ebed7da52db83b8ed37894513b6753c5772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8eb79324d6fbb0dfeff68cf7b980ebed7da52db83b8ed37894513b6753c5772->enter($__internal_a8eb79324d6fbb0dfeff68cf7b980ebed7da52db83b8ed37894513b6753c5772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67bc0ab4b0e14192d79903aadda80475b31b2d9bba32d607fc01ae5b1f21bc1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67bc0ab4b0e14192d79903aadda80475b31b2d9bba32d607fc01ae5b1f21bc1d->enter($__internal_67bc0ab4b0e14192d79903aadda80475b31b2d9bba32d607fc01ae5b1f21bc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Dashboard";
        
        $__internal_67bc0ab4b0e14192d79903aadda80475b31b2d9bba32d607fc01ae5b1f21bc1d->leave($__internal_67bc0ab4b0e14192d79903aadda80475b31b2d9bba32d607fc01ae5b1f21bc1d_prof);

        
        $__internal_a8eb79324d6fbb0dfeff68cf7b980ebed7da52db83b8ed37894513b6753c5772->leave($__internal_a8eb79324d6fbb0dfeff68cf7b980ebed7da52db83b8ed37894513b6753c5772_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f05f7ab5bf420d70f84d3426ef425a3ca962bacf72d95e618b65dd353561fa82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f05f7ab5bf420d70f84d3426ef425a3ca962bacf72d95e618b65dd353561fa82->enter($__internal_f05f7ab5bf420d70f84d3426ef425a3ca962bacf72d95e618b65dd353561fa82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f01006bf27694112c19aa820d8271ac7db40dbb0b9589848d867dfecf327ac4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01006bf27694112c19aa820d8271ac7db40dbb0b9589848d867dfecf327ac4c->enter($__internal_f01006bf27694112c19aa820d8271ac7db40dbb0b9589848d867dfecf327ac4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"row\">
        <div class=\"col-sm-4\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading panel-heading-custom\">
                    <h1 class=\"panel-title\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 text-center\">
                                <span class=\"glyphicon glyphicon-blackboard box-dashboard-icon\"
                                      aria-hidden=\"true\"></span>
                                <div class=\"box-dashboard-title\">Unterricht</div>

                            </div>


                        </div>


                    </h1>
                </div>
                <div class=\"panel-body text-center\">
                    <h4 style=\"margin:0px;\">";
        // line 28
        echo twig_escape_filter($this->env, ($context["unterricht"] ?? $this->getContext($context, "unterricht")), "html", null, true);
        echo " UE</h4>
                </div>
            </div>

        </div>

        <div class=\"col-sm-4\">

            <div class=\"panel panel-default\">
                <div class=\"panel-heading panel-heading-custom2\">
                    <h1 class=\"panel-title\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 text-center\">
                                <span class=\"glyphicon glyphicon-ruble box-dashboard-icon\" aria-hidden=\"true\"></span>
                                <div class=\"box-dashboard-title\">Praktikum</div>

                            </div>


                        </div>


                    </h1>
                </div>
                <div class=\"panel-body text-center\">
                    <h4 style=\"margin:0px;\">";
        // line 53
        echo twig_escape_filter($this->env, ($context["praktikum"] ?? $this->getContext($context, "praktikum")), "html", null, true);
        echo " Tag</h4>
                </div>
            </div>

        </div>

        <div class=\"col-sm-4\">
            <div class=\"panel panel-default \">
                <div class=\"panel-heading panel-heading-custom3\">
                    <h1 class=\"panel-title\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 text-center\">
                                <span class=\"glyphicon glyphicon-glass box-dashboard-icon\" aria-hidden=\"true\"></span>
                                <div class=\"box-dashboard-title\"> Urlaub</div>

                            </div>


                        </div>


                    </h1>
                </div>
                <div class=\"panel-body text-center\">

                    <h4 style=\"margin:0px;\"> ";
        // line 78
        echo twig_escape_filter($this->env, ($context["urlaub"] ?? $this->getContext($context, "urlaub")), "html", null, true);
        echo " Tag</h4>
                </div>
            </div>

        </div>

    </div>

    <div class=\"row\">
        <div class=\"col-lg-12\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Dozent Chart</h3>
                </div>
                <div class=\"panel-body \">
                    <canvas id=\"myChart\"></canvas>

                    <script>

                        var Chartlabels;
                        var ChartData;

                        \$.ajax({
                            url: \"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chart");
        echo "\",
                            type: 'GET',
                            dataType: 'json',
                            success: function (response) {

                                Chartlabels = response.label;
                                ChartData = response.data;
                                console.log(Chartlabels);
                                console.log(ChartData);
                                var ctx = document.getElementById(\"myChart\").getContext(\"2d\");
                                ctx.canvas.width = 50;
                                ctx.canvas.height = 15;

                                var myChart = new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        labels: Chartlabels,
                                        datasets: [
                                            {
                                                data: ChartData,
                                                borderColor:'#c9d30e',
                                                borderWidth: .5,
                                                fill: true

                                            }]
                                    }, options: {
                                        scales: {
                                            xAxes: [{
                                                stacked: true,
                                                display: true,
                                                ticks: {
                                                    fontColor: \"#333\",
                                                    fontFamily: 'Quicksand, sans-serif',\t// this here
                                                }
                                            }],
                                            yAxes: [{
                                                stacked: true,
                                                ticks: {
                                                    fontColor: \"#333\",
                                                    fontFamily: 'Quicksand, sans-serif',\t// this here
                                                }
                                            }]
                                        },
                                        legend: {
                                            display: false
                                        }

                                    }
                                });


                            }
                        });


                    </script>
                </div>
            </div>

        </div>

    </div>


";
        
        $__internal_f01006bf27694112c19aa820d8271ac7db40dbb0b9589848d867dfecf327ac4c->leave($__internal_f01006bf27694112c19aa820d8271ac7db40dbb0b9589848d867dfecf327ac4c_prof);

        
        $__internal_f05f7ab5bf420d70f84d3426ef425a3ca962bacf72d95e618b65dd353561fa82->leave($__internal_f05f7ab5bf420d70f84d3426ef425a3ca962bacf72d95e618b65dd353561fa82_prof);

    }

    public function getTemplateName()
    {
        return "mainpages/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 102,  147 => 78,  119 => 53,  91 => 28,  68 => 7,  59 => 6,  41 => 5,  11 => 1,);
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



{% block title %} Dashboard{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-4\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading panel-heading-custom\">
                    <h1 class=\"panel-title\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 text-center\">
                                <span class=\"glyphicon glyphicon-blackboard box-dashboard-icon\"
                                      aria-hidden=\"true\"></span>
                                <div class=\"box-dashboard-title\">Unterricht</div>

                            </div>


                        </div>


                    </h1>
                </div>
                <div class=\"panel-body text-center\">
                    <h4 style=\"margin:0px;\">{{ unterricht }} UE</h4>
                </div>
            </div>

        </div>

        <div class=\"col-sm-4\">

            <div class=\"panel panel-default\">
                <div class=\"panel-heading panel-heading-custom2\">
                    <h1 class=\"panel-title\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 text-center\">
                                <span class=\"glyphicon glyphicon-ruble box-dashboard-icon\" aria-hidden=\"true\"></span>
                                <div class=\"box-dashboard-title\">Praktikum</div>

                            </div>


                        </div>


                    </h1>
                </div>
                <div class=\"panel-body text-center\">
                    <h4 style=\"margin:0px;\">{{ praktikum }} Tag</h4>
                </div>
            </div>

        </div>

        <div class=\"col-sm-4\">
            <div class=\"panel panel-default \">
                <div class=\"panel-heading panel-heading-custom3\">
                    <h1 class=\"panel-title\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 text-center\">
                                <span class=\"glyphicon glyphicon-glass box-dashboard-icon\" aria-hidden=\"true\"></span>
                                <div class=\"box-dashboard-title\"> Urlaub</div>

                            </div>


                        </div>


                    </h1>
                </div>
                <div class=\"panel-body text-center\">

                    <h4 style=\"margin:0px;\"> {{ urlaub }} Tag</h4>
                </div>
            </div>

        </div>

    </div>

    <div class=\"row\">
        <div class=\"col-lg-12\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Dozent Chart</h3>
                </div>
                <div class=\"panel-body \">
                    <canvas id=\"myChart\"></canvas>

                    <script>

                        var Chartlabels;
                        var ChartData;

                        \$.ajax({
                            url: \"{{ path('chart') }}\",
                            type: 'GET',
                            dataType: 'json',
                            success: function (response) {

                                Chartlabels = response.label;
                                ChartData = response.data;
                                console.log(Chartlabels);
                                console.log(ChartData);
                                var ctx = document.getElementById(\"myChart\").getContext(\"2d\");
                                ctx.canvas.width = 50;
                                ctx.canvas.height = 15;

                                var myChart = new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        labels: Chartlabels,
                                        datasets: [
                                            {
                                                data: ChartData,
                                                borderColor:'#c9d30e',
                                                borderWidth: .5,
                                                fill: true

                                            }]
                                    }, options: {
                                        scales: {
                                            xAxes: [{
                                                stacked: true,
                                                display: true,
                                                ticks: {
                                                    fontColor: \"#333\",
                                                    fontFamily: 'Quicksand, sans-serif',\t// this here
                                                }
                                            }],
                                            yAxes: [{
                                                stacked: true,
                                                ticks: {
                                                    fontColor: \"#333\",
                                                    fontFamily: 'Quicksand, sans-serif',\t// this here
                                                }
                                            }]
                                        },
                                        legend: {
                                            display: false
                                        }

                                    }
                                });


                            }
                        });


                    </script>
                </div>
            </div>

        </div>

    </div>


{% endblock %}



", "mainpages/dashboard.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\mainpages\\dashboard.html.twig");
    }
}
