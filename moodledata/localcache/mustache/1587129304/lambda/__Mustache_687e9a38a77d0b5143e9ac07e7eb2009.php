<?php

class __Mustache_687e9a38a77d0b5143e9ac07e7eb2009 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="paging-control-container">
';
        // 'showitemsperpageselector' section
        $value = $context->find('showitemsperpageselector');
        $buffer .= $this->sectionF24acbbd7d601cae7e42147cb1b8219d($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div
';
        $buffer .= $indent . '        aria-label="';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '        id="';
        $blockFunction = $context->findInBlock('pagingbarid');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= 'paging-bar-';
            $value = $this->resolveValue($context->find('uniqid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
        }
        $buffer .= '"
';
        $buffer .= $indent . '        class="m-0 pagination ';
        // 'showitemsperpageselector' section
        $value = $context->find('showitemsperpageselector');
        $buffer .= $this->sectionA3d607700ca93a4f3eb8e761907c1d09($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        data-region="paging-bar"
';
        $buffer .= $indent . '        data-ignore-control-while-loading="';
        $value = $this->resolveValue($context->find('ignorecontrolwhileloading'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '        data-hide-control-on-single-page="';
        $value = $this->resolveValue($context->find('hidecontrolonsinglepage'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        // 'activepagenumber' section
        $value = $context->find('activepagenumber');
        $buffer .= $this->section5fd8343e4731c94d1f86be5a7cad6df9($context, $indent, $value);
        // 'activepagenumber' inverted section
        $value = $context->find('activepagenumber');
        if (empty($value)) {
            
            $buffer .= $indent . '            data-active-page-number="1"
';
        }
        // 'showitemsperpageselector' section
        $value = $context->find('showitemsperpageselector');
        $buffer .= $this->section7f6001cb308eef24adaa6e845ee42406($context, $indent, $value);
        // 'showitemsperpageselector' inverted section
        $value = $context->find('showitemsperpageselector');
        if (empty($value)) {
            
            $buffer .= $indent . '            data-items-per-page="';
            $value = $this->resolveValue($context->find('itemsperpage'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '"
';
        }
        // 'arialabels.paginationnav' section
        $value = $context->findDot('arialabels.paginationnav');
        $buffer .= $this->section7b6254eb0f3ef8dd9bb7b524e40f8948($context, $indent, $value);
        // 'arialabels.paginationnav' inverted section
        $value = $context->findDot('arialabels.paginationnav');
        if (empty($value)) {
            
            $buffer .= $indent . '            aria-label="';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionB3b9fe4a96cf8bd9421e25e08601e058($context, $indent, $value);
            $buffer .= '"
';
        }
        // 'arialabels.paginationnavitemcomponents' section
        $value = $context->findDot('arialabels.paginationnavitemcomponents');
        $buffer .= $this->sectionC5cecc4dd1a19463f63cfe7350458094($context, $indent, $value);
        // 'arialabels.paginationnavitemcomponents' inverted section
        $value = $context->findDot('arialabels.paginationnavitemcomponents');
        if (empty($value)) {
            
            $buffer .= $indent . '            data-aria-label-components-pagination-item="pagedcontentnavigationitem, core"
';
        }
        // 'arialabels.paginationactivenavitemcomponents' section
        $value = $context->findDot('arialabels.paginationactivenavitemcomponents');
        $buffer .= $this->section6be821101fa7e13a75fd10f4d39cd3a9($context, $indent, $value);
        // 'arialabels.paginationactivenavitemcomponents' inverted section
        $value = $context->findDot('arialabels.paginationactivenavitemcomponents');
        if (empty($value)) {
            
            $buffer .= $indent . '            data-aria-label-components-pagination-active-item="pagedcontentnavigationactiveitem, core"
';
        }
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="d-inline-block">
';
        $buffer .= $indent . '            <ul class="mb-0 d-flex">
';
        // 'previous' section
        $value = $context->find('previous');
        $buffer .= $this->sectionC39db195a0877afa728f2c43333d3da1($context, $indent, $value);
        // 'first' section
        $value = $context->find('first');
        $buffer .= $this->sectionA0228f480528b0f0c9241924cf9e4871($context, $indent, $value);
        // 'pages' section
        $value = $context->find('pages');
        $buffer .= $this->section6cc51d6a116eaa41c777cf6d7106816c($context, $indent, $value);
        // 'last' section
        $value = $context->find('last');
        $buffer .= $this->sectionAa50a8501268659be46348b1afcf8ce1($context, $indent, $value);
        // 'next' section
        $value = $context->find('next');
        $buffer .= $this->section59b719b792428f6823db2008a4e6a866($context, $indent, $value);
        $buffer .= '            </ul>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionCcd25cc1479e8bb63945e84015765508(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' show ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' show ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section061c21bd6c4c7c5f9d61c256abcc3567(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        aria-label="{{.}}"
                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        aria-label="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1aa2fd25fafc048534b66e7545a9f28(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{value}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFd13aaa3df1a0092a84740d62c2cce89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#active}}{{value}}{{/active}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->sectionE1aa2fd25fafc048534b66e7545a9f28($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4bc1bddf6d969b41fde431a432c0af8e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pagedcontentpagingbaritemsperpage, core, {{#itemsperpage}}{{#active}}{{value}}{{/active}}{{/itemsperpage}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' pagedcontentpagingbaritemsperpage, core, ';
                // 'itemsperpage' section
                $value = $context->find('itemsperpage');
                $buffer .= $this->sectionFd13aaa3df1a0092a84740d62c2cce89($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA06a57a06e974665f2d9c1acf8a3dad9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <span data-active-item-text>{{value}}</span>
                        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <span data-active-item-text>';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBce992fd788be5a0e7271b5eab77a239(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#active}}
                            <span data-active-item-text>{{value}}</span>
                        {{/active}}
                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->sectionA06a57a06e974665f2d9c1acf8a3dad9($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6cce4e780c7f4deac974e8ffccf5902(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        data-active-item-button-aria-label-components="{{.}}"
                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        data-active-item-button-aria-label-components="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6922901afa7b60d3ce7403587f8d6c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section796b182c855d7b48f08d0295b8450703(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' all, core ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' all, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section411de9b8a9f955133a820a969fe8eed8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="dropdown-item {{#active}}active{{/active}}" data-limit={{value}}>
                            <a href="#">
                                {{#value}}{{.}}{{/value}}
                                {{^value}}{{#str}} all, core {{/str}}{{/value}}
                            </a>
                        </li>
                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li class="dropdown-item ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" data-limit=';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '>
';
                $buffer .= $indent . '                            <a href="#">
';
                $buffer .= $indent . '                                ';
                // 'value' section
                $value = $context->find('value');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                ';
                // 'value' inverted section
                $value = $context->find('value');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section796b182c855d7b48f08d0295b8450703($context, $indent, $value);
                }
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF24acbbd7d601cae7e42147cb1b8219d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div
            id="paging-control-limit-container-{{uniqid}}"
            data-region="paging-control-limit-container"
            class="pull-left"
        >
            <span class="mr-1">{{#str}} show {{/str}}</span>
            <div class="btn-group">
                <button
                    type="button"
                    class="btn btn-outline-secondary dropdown-toggle"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-action="limit-toggle"
                    {{#arialabels.itemsperpage}}
                        aria-label="{{.}}"
                    {{/arialabels.itemsperpage}}
                    {{^arialabels.itemsperpage}}
                        aria-label="{{#str}} pagedcontentpagingbaritemsperpage, core, {{#itemsperpage}}{{#active}}{{value}}{{/active}}{{/itemsperpage}}{{/str}}"
                    {{/arialabels.itemsperpage}}
                >
                    {{#itemsperpage}}
                        {{#active}}
                            <span data-active-item-text>{{value}}</span>
                        {{/active}}
                    {{/itemsperpage}}
                    <span data-region="caret" class="caret"></span>
                </button>
                <ul
                    role="menu"
                    class="dropdown-menu"
                    data-show-active-item
                    {{#arialabels.itemsperpagecomponents}}
                        data-active-item-button-aria-label-components="{{.}}"
                    {{/arialabels.itemsperpagecomponents}}
                    {{^arialabels.itemsperpagecomponents}}
                        data-active-item-button-aria-label-components="pagedcontentpagingbaritemsperpage, core"
                    {{/arialabels.itemsperpagecomponents}}
                >
                    {{#itemsperpage}}
                        <li class="dropdown-item {{#active}}active{{/active}}" data-limit={{value}}>
                            <a href="#">
                                {{#value}}{{.}}{{/value}}
                                {{^value}}{{#str}} all, core {{/str}}{{/value}}
                            </a>
                        </li>
                    {{/itemsperpage}}
                </ul>
            </div>
        </div>
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div
';
                $buffer .= $indent . '            id="paging-control-limit-container-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '            data-region="paging-control-limit-container"
';
                $buffer .= $indent . '            class="pull-left"
';
                $buffer .= $indent . '        >
';
                $buffer .= $indent . '            <span class="mr-1">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionCcd25cc1479e8bb63945e84015765508($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            <div class="btn-group">
';
                $buffer .= $indent . '                <button
';
                $buffer .= $indent . '                    type="button"
';
                $buffer .= $indent . '                    class="btn btn-outline-secondary dropdown-toggle"
';
                $buffer .= $indent . '                    data-toggle="dropdown"
';
                $buffer .= $indent . '                    aria-haspopup="true"
';
                $buffer .= $indent . '                    aria-expanded="false"
';
                $buffer .= $indent . '                    data-action="limit-toggle"
';
                // 'arialabels.itemsperpage' section
                $value = $context->findDot('arialabels.itemsperpage');
                $buffer .= $this->section061c21bd6c4c7c5f9d61c256abcc3567($context, $indent, $value);
                // 'arialabels.itemsperpage' inverted section
                $value = $context->findDot('arialabels.itemsperpage');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        aria-label="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section4bc1bddf6d969b41fde431a432c0af8e($context, $indent, $value);
                    $buffer .= '"
';
                }
                $buffer .= $indent . '                >
';
                // 'itemsperpage' section
                $value = $context->find('itemsperpage');
                $buffer .= $this->sectionBce992fd788be5a0e7271b5eab77a239($context, $indent, $value);
                $buffer .= $indent . '                    <span data-region="caret" class="caret"></span>
';
                $buffer .= $indent . '                </button>
';
                $buffer .= $indent . '                <ul
';
                $buffer .= $indent . '                    role="menu"
';
                $buffer .= $indent . '                    class="dropdown-menu"
';
                $buffer .= $indent . '                    data-show-active-item
';
                // 'arialabels.itemsperpagecomponents' section
                $value = $context->findDot('arialabels.itemsperpagecomponents');
                $buffer .= $this->sectionE6cce4e780c7f4deac974e8ffccf5902($context, $indent, $value);
                // 'arialabels.itemsperpagecomponents' inverted section
                $value = $context->findDot('arialabels.itemsperpagecomponents');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        data-active-item-button-aria-label-components="pagedcontentpagingbaritemsperpage, core"
';
                }
                $buffer .= $indent . '                >
';
                // 'itemsperpage' section
                $value = $context->find('itemsperpage');
                $buffer .= $this->section411de9b8a9f955133a820a969fe8eed8($context, $indent, $value);
                $buffer .= $indent . '                </ul>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA3d607700ca93a4f3eb8e761907c1d09(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pagination-right';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'pagination-right';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fd8343e4731c94d1f86be5a7cad6df9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            data-active-page-number="{{.}}"
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            data-active-page-number="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8832b8c7a2d81c37e8b23d3fcebd439e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    data-items-per-page="{{value}}"
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    data-items-per-page="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b3ab5e6fe4f83a220daff843e2146b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#active}}
                    data-items-per-page="{{value}}"
                {{/active}}
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section8832b8c7a2d81c37e8b23d3fcebd439e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7f6001cb308eef24adaa6e845ee42406(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#itemsperpage}}
                {{#active}}
                    data-items-per-page="{{value}}"
                {{/active}}
            {{/itemsperpage}}
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'itemsperpage' section
                $value = $context->find('itemsperpage');
                $buffer .= $this->section5b3ab5e6fe4f83a220daff843e2146b1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7b6254eb0f3ef8dd9bb7b524e40f8948(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            aria-label="{{.}}"
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            aria-label="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3b9fe4a96cf8bd9421e25e08601e058(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pagedcontentnavigation, core ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' pagedcontentnavigation, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC5cecc4dd1a19463f63cfe7350458094(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            data-aria-label-components-pagination-item="{{.}}"
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            data-aria-label-components-pagination-item="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6be821101fa7e13a75fd10f4d39cd3a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            data-aria-label-components-pagination-active-item="{{.}}"
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            data-aria-label-components-pagination-active-item="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6082c1f5941a12f77083512a9a2e6a62(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'previous';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'previous';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC39db195a0877afa728f2c43333d3da1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{< core/paged_content_paging_bar_item }}
                        {{$item-content}}
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">{{#str}}previous{{/str}}</span>
                        {{/item-content}}
                        {{$attributes}}data-control="previous"{{/attributes}}
                    {{/ core/paged_content_paging_bar_item }}
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    ';
                if ($parent = $this->mustache->loadPartial('core/paged_content_paging_bar_item')) {
                    $context->pushBlockContext(array(
                        'item-content' => array($this, 'blockA9b5b4a3f4adcbc60f213027a17ba513'),
                        'attributes' => array($this, 'block12120e4d0151c4806def3156af195371'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03d2c990698604a1f6c30efea4dea793(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'first';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'first';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0228f480528b0f0c9241924cf9e4871(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{< core/paged_content_paging_bar_item }}
                        {{$item-content}}
                            <span aria-hidden="true">{{#str}}first{{/str}}</span>
                            <span class="sr-only">{{#str}}first{{/str}}</span>
                        {{/item-content}}
                        {{$attributes}}data-control="first"{{/attributes}}
                    {{/ core/paged_content_paging_bar_item }}
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '                    ';
                if ($parent = $this->mustache->loadPartial('core/paged_content_paging_bar_item')) {
                    $context->pushBlockContext(array(
                        'item-content' => array($this, 'blockC13bf6e9e685a249e179ffdb23414509'),
                        'attributes' => array($this, 'blockCbc4a7430da26319add789cf520478eb'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6cc51d6a116eaa41c777cf6d7106816c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{< core/paged_content_paging_bar_item }}
                        {{$attributes}}data-page="true"{{/attributes}}
                    {{/ core/paged_content_paging_bar_item }}
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '                    ';
                if ($parent = $this->mustache->loadPartial('core/paged_content_paging_bar_item')) {
                    $context->pushBlockContext(array(
                        'attributes' => array($this, 'block05f529f34933f2c86559b32975b81c54'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section484651457d3987d348fb573f16f6422e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'last';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'last';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa50a8501268659be46348b1afcf8ce1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{< core/paged_content_paging_bar_item }}
                        {{$item-content}}
                            <span aria-hidden="true">{{#str}}last{{/str}}</span>
                            <span class="sr-only">{{#str}}last{{/str}}</span>
                        {{/item-content}}
                        {{$attributes}}data-control="last"{{/attributes}}
                    {{/ core/paged_content_paging_bar_item }}
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '                    ';
                if ($parent = $this->mustache->loadPartial('core/paged_content_paging_bar_item')) {
                    $context->pushBlockContext(array(
                        'item-content' => array($this, 'block5ed09bf9af32f69e22e4fba5d400d66b'),
                        'attributes' => array($this, 'block76ecf06374cb515b4027dd1680730b5e'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa8bb7b1bb267b8cc98d38fe4bf9f047(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'next';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'next';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59b719b792428f6823db2008a4e6a866(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{< core/paged_content_paging_bar_item }}
                        {{$item-content}}
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">{{#str}}next{{/str}}</span>
                        {{/item-content}}
                        {{$attributes}}data-control="next"{{/attributes}}
                    {{/ core/paged_content_paging_bar_item }}
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '                    ';
                if ($parent = $this->mustache->loadPartial('core/paged_content_paging_bar_item')) {
                    $context->pushBlockContext(array(
                        'item-content' => array($this, 'blockA98ef1c3af3f011dcfd76635fd157f64'),
                        'attributes' => array($this, 'block6b9932538b9a38e61842fc27de1eab11'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockA9b5b4a3f4adcbc60f213027a17ba513($context)
    {
        $indent = $buffer = '';
        $buffer .= '                            <span aria-hidden="true">&laquo;</span>
';
        $buffer .= $indent . '                            <span class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6082c1f5941a12f77083512a9a2e6a62($context, $indent, $value);
        $buffer .= '</span>
';
    
        return $buffer;
    }

    public function block12120e4d0151c4806def3156af195371($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'data-control="previous"';
    
        return $buffer;
    }

    public function blockC13bf6e9e685a249e179ffdb23414509($context)
    {
        $indent = $buffer = '';
        $buffer .= '                            <span aria-hidden="true">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section03d2c990698604a1f6c30efea4dea793($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                            <span class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section03d2c990698604a1f6c30efea4dea793($context, $indent, $value);
        $buffer .= '</span>
';
    
        return $buffer;
    }

    public function blockCbc4a7430da26319add789cf520478eb($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'data-control="first"';
    
        return $buffer;
    }

    public function block05f529f34933f2c86559b32975b81c54($context)
    {
        $indent = $buffer = '';
        $buffer .= 'data-page="true"';
    
        return $buffer;
    }

    public function block5ed09bf9af32f69e22e4fba5d400d66b($context)
    {
        $indent = $buffer = '';
        $buffer .= '                            <span aria-hidden="true">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section484651457d3987d348fb573f16f6422e($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                            <span class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section484651457d3987d348fb573f16f6422e($context, $indent, $value);
        $buffer .= '</span>
';
    
        return $buffer;
    }

    public function block76ecf06374cb515b4027dd1680730b5e($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'data-control="last"';
    
        return $buffer;
    }

    public function blockA98ef1c3af3f011dcfd76635fd157f64($context)
    {
        $indent = $buffer = '';
        $buffer .= '                            <span aria-hidden="true">&raquo;</span>
';
        $buffer .= $indent . '                            <span class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionBa8bb7b1bb267b8cc98d38fe4bf9f047($context, $indent, $value);
        $buffer .= '</span>
';
    
        return $buffer;
    }

    public function block6b9932538b9a38e61842fc27de1eab11($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'data-control="next"';
    
        return $buffer;
    }
}
