<?php

/* mainpages/GruppeBerichtenView.html.twig */
class __TwigTemplate_0cadaddc39eb9f38ef3ae34d02367526a58983f192aecd2be73feb1feb4ec8f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ReportLayout.html.twig", "mainpages/GruppeBerichtenView.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ReportLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1f56ded879b00bb1c3df6456cf59a4381d64fac79df5de435809e3d515b02e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f56ded879b00bb1c3df6456cf59a4381d64fac79df5de435809e3d515b02e5->enter($__internal_d1f56ded879b00bb1c3df6456cf59a4381d64fac79df5de435809e3d515b02e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/GruppeBerichtenView.html.twig"));

        $__internal_3bad79c075c33bdefbc8a2f87636fd30e4531d3ae80ae0e16c42b6e103edd10e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bad79c075c33bdefbc8a2f87636fd30e4531d3ae80ae0e16c42b6e103edd10e->enter($__internal_3bad79c075c33bdefbc8a2f87636fd30e4531d3ae80ae0e16c42b6e103edd10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/GruppeBerichtenView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1f56ded879b00bb1c3df6456cf59a4381d64fac79df5de435809e3d515b02e5->leave($__internal_d1f56ded879b00bb1c3df6456cf59a4381d64fac79df5de435809e3d515b02e5_prof);

        
        $__internal_3bad79c075c33bdefbc8a2f87636fd30e4531d3ae80ae0e16c42b6e103edd10e->leave($__internal_3bad79c075c33bdefbc8a2f87636fd30e4531d3ae80ae0e16c42b6e103edd10e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a987011111d6f48b2806795df8bfac7069c3aebfff421cdf4254423f96c41ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a987011111d6f48b2806795df8bfac7069c3aebfff421cdf4254423f96c41ca5->enter($__internal_a987011111d6f48b2806795df8bfac7069c3aebfff421cdf4254423f96c41ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da3734df837216cc8815f60c30d15e77d434e2d1c22e82d18377e9cee0006bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3734df837216cc8815f60c30d15e77d434e2d1c22e82d18377e9cee0006bf4->enter($__internal_da3734df837216cc8815f60c30d15e77d434e2d1c22e82d18377e9cee0006bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"content\">

        <div class=\"content-inner\">

            <div class=\"row\" style=\"margin-bottom: 10px;\">
                <div class=\"col-lg-12 \">
                    <a href=\"#\" class=\"btn btn-default btn-sm pull-right\" onclick=\"script:window.print();\">
                        <span class=\"glyphicon glyphicon-print\"></span> Print
                    </a>
                    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("export-gpdf", array("id" => ($context["groupid"] ?? $this->getContext($context, "groupid")))), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm\">
                        <span class=\"glyphicon glyphicon-floppy-disk\"></span> PDF
                    </a>
                </div>
            </div>

                <table id=\"report\" class=\"table table-hover table-bordered\">
                    <caption style=\"padding-left:5px; font-size: 16px; color: #3baae3;\">
                        <span style=\"color: #676a6c;\">Gruppe Name:</span> ";
        // line 21
        echo twig_escape_filter($this->env, ($context["groupname"] ?? $this->getContext($context, "groupname")), "html", null, true);
        echo "
                    </caption>

                    <thead>
                    <th>
                        Einzehlfachsname
                    </th>
                    <th>
                        Unterricht Anzahl
                    </th>
                    </thead>
                    <tbody>

                    ";
        // line 34
        $context["cdate"] = 0;
        // line 35
        echo "
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 37
            echo "



                            <tr class=\"active\" style=\"page-break-inside:avoid;\">
                                <td colspan=\"1\" style=\"font-size: 14px;\"> ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "0", array(), "array"), "EinzelFach", array()), "html", null, true);
            echo " </td>
                                <td colspan=\"1\" style=\"font-size: 14px;\"> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "1", array(), "array"), "html", null, true);
            echo " </td>

                            </tr>

                        ";
            // line 47
            $context["cdate"] = (($context["cdate"] ?? $this->getContext($context, "cdate")) + $this->getAttribute($context["event"], "1", array(), "array"));
            // line 48
            echo "

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
                    <tr class=\"active\" style=\"page-break-inside:avoid;\">

                        <td colspan=\"1\" style=\"font-size: 16px; color:#3baae3; \"> Unterricht Gesamt Anzahl </td>
                        <td colspan=\"1\" style=\"font-size: 16px; color:#3baae3;\"> ";
        // line 55
        echo twig_escape_filter($this->env, ($context["cdate"] ?? $this->getContext($context, "cdate")), "html", null, true);
        echo " </td>

                    </tr>


                    </tbody>

                </table>




        </div>

        <div class=\"row\" style=\"margin-bottom: 10px;\">
            <div class=\"col-sm-2\"></div>
            <div class=\"col-sm-4\">
                <div class=\"panel panel-default \">
                    <div class=\"panel-heading panel-heading-custom2\">
                        <h1 class=\"panel-title\">
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 text-center\">
                                    <span class=\"glyphicon glyphicon-ruble box-dashboard-icon\" aria-hidden=\"true\"></span>
                                    <div class=\"box-dashboard-title\"> Praktikum</div>

                                </div>


                            </div>


                        </h1>
                    </div>
                    <div class=\"panel-body text-center\">

                        <h4 style=\"margin:0px;\"> ";
        // line 90
        echo twig_escape_filter($this->env, ($context["Praktikum"] ?? $this->getContext($context, "Praktikum")), "html", null, true);
        echo " Tage</h4>
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
        // line 115
        echo twig_escape_filter($this->env, ($context["Urlaub"] ?? $this->getContext($context, "Urlaub")), "html", null, true);
        echo " Tage</h4>
                    </div>
                </div>

            </div>
            <div class=\"col-sm-2\"></div>
        </div>


    </div>



";
        
        $__internal_da3734df837216cc8815f60c30d15e77d434e2d1c22e82d18377e9cee0006bf4->leave($__internal_da3734df837216cc8815f60c30d15e77d434e2d1c22e82d18377e9cee0006bf4_prof);

        
        $__internal_a987011111d6f48b2806795df8bfac7069c3aebfff421cdf4254423f96c41ca5->leave($__internal_a987011111d6f48b2806795df8bfac7069c3aebfff421cdf4254423f96c41ca5_prof);

    }

    public function getTemplateName()
    {
        return "mainpages/GruppeBerichtenView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 115,  168 => 90,  130 => 55,  124 => 51,  116 => 48,  114 => 47,  107 => 43,  103 => 42,  96 => 37,  92 => 36,  89 => 35,  87 => 34,  71 => 21,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'ReportLayout.html.twig' %}

{% block body %}
    <div id=\"content\">

        <div class=\"content-inner\">

            <div class=\"row\" style=\"margin-bottom: 10px;\">
                <div class=\"col-lg-12 \">
                    <a href=\"#\" class=\"btn btn-default btn-sm pull-right\" onclick=\"script:window.print();\">
                        <span class=\"glyphicon glyphicon-print\"></span> Print
                    </a>
                    <a href=\"{{ path('export-gpdf', { 'id': groupid }) }}\" class=\"btn btn-default btn-sm\">
                        <span class=\"glyphicon glyphicon-floppy-disk\"></span> PDF
                    </a>
                </div>
            </div>

                <table id=\"report\" class=\"table table-hover table-bordered\">
                    <caption style=\"padding-left:5px; font-size: 16px; color: #3baae3;\">
                        <span style=\"color: #676a6c;\">Gruppe Name:</span> {{ groupname }}
                    </caption>

                    <thead>
                    <th>
                        Einzehlfachsname
                    </th>
                    <th>
                        Unterricht Anzahl
                    </th>
                    </thead>
                    <tbody>

                    {% set cdate = 0 %}

                    {% for event in events %}




                            <tr class=\"active\" style=\"page-break-inside:avoid;\">
                                <td colspan=\"1\" style=\"font-size: 14px;\"> {{ event['0'].EinzelFach }} </td>
                                <td colspan=\"1\" style=\"font-size: 14px;\"> {{ event['1'] }} </td>

                            </tr>

                        {% set cdate = cdate+event['1'] %}


                    {% endfor %}

                    <tr class=\"active\" style=\"page-break-inside:avoid;\">

                        <td colspan=\"1\" style=\"font-size: 16px; color:#3baae3; \"> Unterricht Gesamt Anzahl </td>
                        <td colspan=\"1\" style=\"font-size: 16px; color:#3baae3;\"> {{ cdate }} </td>

                    </tr>


                    </tbody>

                </table>




        </div>

        <div class=\"row\" style=\"margin-bottom: 10px;\">
            <div class=\"col-sm-2\"></div>
            <div class=\"col-sm-4\">
                <div class=\"panel panel-default \">
                    <div class=\"panel-heading panel-heading-custom2\">
                        <h1 class=\"panel-title\">
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 text-center\">
                                    <span class=\"glyphicon glyphicon-ruble box-dashboard-icon\" aria-hidden=\"true\"></span>
                                    <div class=\"box-dashboard-title\"> Praktikum</div>

                                </div>


                            </div>


                        </h1>
                    </div>
                    <div class=\"panel-body text-center\">

                        <h4 style=\"margin:0px;\"> {{ Praktikum }} Tage</h4>
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

                        <h4 style=\"margin:0px;\"> {{ Urlaub }} Tage</h4>
                    </div>
                </div>

            </div>
            <div class=\"col-sm-2\"></div>
        </div>


    </div>



{% endblock %}

", "mainpages/GruppeBerichtenView.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\mainpages\\GruppeBerichtenView.html.twig");
    }
}
