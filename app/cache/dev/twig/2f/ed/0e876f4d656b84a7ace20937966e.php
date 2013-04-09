<?php

/* WebProfilerExtraBundle:Collector:container.html.twig */
class __TwigTemplate_2fed0e876f4d656b84a7ace20937966e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "displayInWdt")) {
            // line 5
            echo "        ";
            $context["icon"] = ('' === $tmp = "            <img height=\"28\" alt=\"Container\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAMAAABWBG9SAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyMjY5ODc3MjRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyMjY5ODc3MzRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjIyNjk4NzcwNEVEMjExRTI5RDM1QjZBOTBCNThGRTZCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjIyNjk4NzcxNEVEMjExRTI5RDM1QjZBOTBCNThGRTZCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+aeuERwAAASBQTFRFQD8/RUVFubi49/f3e3p6rKurmJeXsbGxr6+v7u7uU1NT19bWyMjI5+fnY2JiQUFBxMTE2dnZt7e3YWBg39/faGdnS0tLUE9PgYCAgIB/5+bmUVFRTk5OYmJhvb299/b2ycnJr66tUlJSpqWkurm5kZGQsbCw0dDQd3d2kI+PcnBwxsXFvLu7oaCgWVlYy8vKTU1MW1patLOzy8vLenp6oqGglZWVRkZGp6eml5aWaWlpcXFxRkVFvby8gYB/aWlo/Pz8Y2NjQD9ApaWkP0BAf39/lJOTeHd3p6amr66uw8PDlZWU+/v73d3deXh4RUVG7e3tcXBwcnFwjYyM6+vrxsbGxsbFl5eX2travb2829vbs7OzT09PPz8/QEBA////blEBcwAAAGB0Uk5T//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8Ac23kQwAAANRJREFUeNpiiMcCGKgkKG8byYwm6OOrphVkJOKAEAzR9hZlZIiNjTW3Cg8NAAmK6AYaxMXGxoFBbKyLjLWpFIOCsqseA0IwzlDSQ53BUUJRwMvZLwYkIW1iESbgaSfLIBYby2hvqWKsE6wpp89kJmoTGyvGEAPRpeQeEaUhDjE8BiwINo6DA2owkmBcdHQc/QX9ndAFYxkZVIX5IT6HCMbG8gu7McQzC7KycMXFMrCzM8TGcbGwCjJDA5mTh41PSIiPjYcTJTp4mbi5mXipHMXIACDAAPMEsv90Bi2uAAAAAElFTkSuQmCC\"/>
            <span class=\"sf-toolbar-info-piece-additional-detail\">Container</span>
        ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Services</b>
                <span>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "servicecount"), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Parameter<br />namespaces</b>
                <span>";
            // line 16
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "parameters")), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 19
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 20
            echo "    ";
        }
    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        // line 24
        echo "    <span class=\"label\">
        <span class=\"icon\">
            <img width=30 src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofilerextra/images/container.png"), "html", null, true);
        echo "\" />
        </span>
        <strong>Container</strong>
        <span class=\"count\">
            <span>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "servicecount"), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 35
    public function block_panel($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "services"))) {
            // line 37
            echo "        <em>No debug container information</em>
    ";
        } else {
            // line 39
            echo "        <h2>Container Parameters</h2>
        <table>
            ";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "parameters"));
            foreach ($context['_seq'] as $context["service"] => $context["parameters"]) {
                // line 42
                echo "                <tr>
                    <th>";
                // line 43
                echo twig_escape_filter($this->env, (isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "html", null, true);
                echo "</th>
                    <td>
                        <table>
                            ";
                // line 46
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 47
                    echo "                                <tr>
                                    <th width=\"420\"><code>";
                    // line 48
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo "</code></th>
                                    <td>
                                        ";
                    // line 50
                    echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->dump((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
                    echo "
                                    </td>
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 54
                echo "                        </table>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['service'], $context['parameters'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 58
            echo "        </table>

        <h2>Container Services:</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Scope</th>
                <th>Class Name</th>
            </tr>
            ";
            // line 67
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "services"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["service_id"] => $context["service"]) {
                // line 68
                echo "                <tr class=\"";
                echo ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2 == 1)) ? ("odd") : ("even"));
                echo "\">
                    <th><code>";
                // line 69
                echo twig_escape_filter($this->env, (isset($context["service_id"]) ? $context["service_id"] : $this->getContext($context, "service_id")), "html", null, true);
                echo "</code></th>
                    <td>
                        ";
                // line 71
                if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "scope", array(), "any", true, true)) {
                    // line 72
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "scope"), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 74
                    echo "                            N/A
                        ";
                }
                // line 76
                echo "                    </td>
                    <td>
                        ";
                // line 78
                if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "class", array(), "any", true, true)) {
                    // line 79
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "class"), "html", null, true);
                    echo "
                        ";
                } elseif ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "alias", array(), "any", true, true)) {
                    // line 81
                    echo "                            alias to ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "alias"), "html", null, true);
                    echo "
                        ";
                }
                // line 83
                echo "                    </td>
                </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['service_id'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 86
            echo "        </table>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerExtraBundle:Collector:container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 86,  217 => 83,  211 => 81,  105 => 41,  195 => 74,  127 => 48,  94 => 36,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  368 => 112,  365 => 111,  362 => 110,  355 => 106,  314 => 99,  294 => 90,  268 => 85,  264 => 84,  252 => 80,  247 => 78,  241 => 77,  220 => 70,  214 => 69,  208 => 68,  177 => 68,  169 => 69,  128 => 49,  71 => 17,  114 => 42,  78 => 21,  203 => 78,  182 => 69,  176 => 64,  173 => 70,  149 => 58,  144 => 53,  133 => 51,  99 => 30,  95 => 34,  57 => 11,  34 => 5,  31 => 4,  796 => 475,  793 => 474,  782 => 472,  778 => 471,  774 => 469,  761 => 468,  735 => 463,  732 => 462,  713 => 460,  696 => 459,  692 => 457,  688 => 456,  684 => 455,  680 => 454,  676 => 453,  672 => 452,  668 => 451,  665 => 450,  663 => 449,  646 => 448,  635 => 447,  620 => 442,  615 => 440,  611 => 439,  608 => 438,  606 => 437,  592 => 436,  555 => 401,  537 => 398,  520 => 397,  517 => 396,  515 => 395,  510 => 393,  505 => 391,  201 => 94,  181 => 88,  170 => 85,  163 => 82,  160 => 67,  153 => 77,  141 => 51,  90 => 42,  84 => 28,  68 => 30,  62 => 27,  28 => 3,  332 => 116,  321 => 112,  318 => 111,  315 => 110,  312 => 98,  309 => 97,  300 => 105,  297 => 104,  291 => 102,  288 => 101,  283 => 88,  274 => 97,  258 => 81,  243 => 92,  235 => 74,  224 => 71,  202 => 77,  156 => 62,  136 => 71,  122 => 47,  119 => 42,  112 => 43,  109 => 42,  85 => 25,  58 => 25,  44 => 10,  178 => 87,  175 => 86,  154 => 54,  134 => 54,  125 => 48,  121 => 45,  118 => 46,  113 => 48,  102 => 40,  87 => 41,  49 => 14,  46 => 7,  27 => 3,  91 => 35,  63 => 18,  45 => 8,  385 => 160,  382 => 159,  376 => 158,  374 => 116,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  349 => 149,  341 => 105,  336 => 145,  330 => 141,  324 => 113,  322 => 101,  317 => 135,  311 => 131,  308 => 130,  305 => 95,  303 => 106,  298 => 91,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 96,  261 => 105,  255 => 93,  251 => 101,  244 => 97,  237 => 93,  231 => 83,  228 => 88,  225 => 87,  223 => 86,  212 => 78,  209 => 82,  206 => 77,  204 => 95,  193 => 73,  190 => 76,  187 => 71,  185 => 75,  180 => 63,  174 => 65,  171 => 61,  168 => 62,  166 => 68,  159 => 53,  151 => 60,  148 => 46,  143 => 56,  140 => 54,  130 => 50,  116 => 36,  107 => 42,  103 => 37,  97 => 37,  88 => 25,  82 => 22,  79 => 21,  76 => 26,  73 => 19,  70 => 20,  67 => 15,  61 => 19,  47 => 9,  39 => 6,  36 => 5,  246 => 32,  164 => 59,  162 => 66,  157 => 56,  145 => 74,  139 => 50,  131 => 45,  115 => 39,  108 => 37,  106 => 33,  101 => 39,  98 => 38,  96 => 37,  92 => 33,  80 => 21,  74 => 22,  64 => 20,  55 => 16,  52 => 12,  50 => 10,  43 => 12,  41 => 9,  32 => 4,  29 => 3,  360 => 109,  351 => 150,  347 => 163,  344 => 119,  339 => 146,  337 => 103,  329 => 154,  327 => 114,  320 => 149,  313 => 145,  306 => 107,  299 => 137,  292 => 121,  285 => 89,  278 => 86,  263 => 95,  256 => 109,  249 => 138,  242 => 96,  232 => 93,  229 => 73,  221 => 86,  218 => 83,  213 => 82,  210 => 81,  205 => 79,  199 => 76,  191 => 67,  189 => 72,  179 => 72,  172 => 64,  165 => 60,  161 => 63,  158 => 80,  155 => 62,  147 => 58,  142 => 51,  138 => 50,  135 => 47,  132 => 51,  126 => 45,  123 => 61,  120 => 40,  117 => 39,  111 => 43,  104 => 41,  100 => 39,  93 => 28,  89 => 29,  86 => 24,  83 => 30,  75 => 23,  72 => 24,  69 => 23,  66 => 20,  60 => 13,  54 => 10,  51 => 10,  48 => 12,  42 => 7,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
