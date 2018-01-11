<?php

/* :mainpages:dashboard.html.twig */
class __TwigTemplate_4b95a10b964c0407cfc5fcb2ee81e4ed652f3bed87076aff9187f93445fc7587 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", ":mainpages:dashboard.html.twig", 1);
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
        $__internal_9f26e04022c97d765e9df2085ba5969c0623801f57c1e681ecb3a19cb3fbf9f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f26e04022c97d765e9df2085ba5969c0623801f57c1e681ecb3a19cb3fbf9f7->enter($__internal_9f26e04022c97d765e9df2085ba5969c0623801f57c1e681ecb3a19cb3fbf9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:dashboard.html.twig"));

        $__internal_d08a9a79f255e31927e57a697e226573862860c7a5990828ca905d03cbc20210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08a9a79f255e31927e57a697e226573862860c7a5990828ca905d03cbc20210->enter($__internal_d08a9a79f255e31927e57a697e226573862860c7a5990828ca905d03cbc20210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f26e04022c97d765e9df2085ba5969c0623801f57c1e681ecb3a19cb3fbf9f7->leave($__internal_9f26e04022c97d765e9df2085ba5969c0623801f57c1e681ecb3a19cb3fbf9f7_prof);

        
        $__internal_d08a9a79f255e31927e57a697e226573862860c7a5990828ca905d03cbc20210->leave($__internal_d08a9a79f255e31927e57a697e226573862860c7a5990828ca905d03cbc20210_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff072d7f2df2e6e196b3f84bed5874dd284f9c5f061f4256e8666168fa5388da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff072d7f2df2e6e196b3f84bed5874dd284f9c5f061f4256e8666168fa5388da->enter($__internal_ff072d7f2df2e6e196b3f84bed5874dd284f9c5f061f4256e8666168fa5388da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_61cd2f5da098f54892db7a07a840e3115329a228aab8c356ac4ccb10a3f319ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61cd2f5da098f54892db7a07a840e3115329a228aab8c356ac4ccb10a3f319ba->enter($__internal_61cd2f5da098f54892db7a07a840e3115329a228aab8c356ac4ccb10a3f319ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Dashboard";
        
        $__internal_61cd2f5da098f54892db7a07a840e3115329a228aab8c356ac4ccb10a3f319ba->leave($__internal_61cd2f5da098f54892db7a07a840e3115329a228aab8c356ac4ccb10a3f319ba_prof);

        
        $__internal_ff072d7f2df2e6e196b3f84bed5874dd284f9c5f061f4256e8666168fa5388da->leave($__internal_ff072d7f2df2e6e196b3f84bed5874dd284f9c5f061f4256e8666168fa5388da_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9504ef3b40e4912cd5df98574e2c9e080fb6e1f653174a5fa68f295191c52c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9504ef3b40e4912cd5df98574e2c9e080fb6e1f653174a5fa68f295191c52c0->enter($__internal_a9504ef3b40e4912cd5df98574e2c9e080fb6e1f653174a5fa68f295191c52c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e456b07908f8cec4cd7f3b071dd016488d8c24631bddb1075b19e7ff64380acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e456b07908f8cec4cd7f3b071dd016488d8c24631bddb1075b19e7ff64380acc->enter($__internal_e456b07908f8cec4cd7f3b071dd016488d8c24631bddb1075b19e7ff64380acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e456b07908f8cec4cd7f3b071dd016488d8c24631bddb1075b19e7ff64380acc->leave($__internal_e456b07908f8cec4cd7f3b071dd016488d8c24631bddb1075b19e7ff64380acc_prof);

        
        $__internal_a9504ef3b40e4912cd5df98574e2c9e080fb6e1f653174a5fa68f295191c52c0->leave($__internal_a9504ef3b40e4912cd5df98574e2c9e080fb6e1f653174a5fa68f295191c52c0_prof);

    }

    public function getTemplateName()
    {
        return ":mainpages:dashboard.html.twig";
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



", ":mainpages:dashboard.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/mainpages/dashboard.html.twig");
    }
}
