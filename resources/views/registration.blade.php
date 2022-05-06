@extends('layouts.userdash')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="grid simple form-grid">
                <div class="grid-title no-border">
                    <h4>Traditional <span class="semi-bold">Validation</span></h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#grid-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="grid-body no-border">
                    <form action="#" id="form_traditional_validation" name="form_traditional_validation" role="form"
                        autocomplete="off" class="validate" novalidate="novalidate">
                        <div class="form-group">
                            <label class="form-label">Amount</label> <span class="help">e.g. "5000"</span>
                            <input class="form-control" id="form1Amount" name="form1Amount" type="number" required=""
                                aria-required="true">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Card Holder's Name</label> <span class="help">e.g. "Jane
                                Smith"</span>
                            <div class="input-with-icon right">
                                <i class=""></i>
                                <input class="form-control" id="form1CardHolderName" name="form1CardHolderName"
                                    type="text" required="" aria-required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Card Number</label>z <span class="help">e.g.
                                "5689569985"</span>
                            <div class="input-with-icon right">
                                <input class="form-control" id="form1CardNumber" name="form1CardNumber" type="text"
                                    pattern="[0-9]{13,16}" required="" aria-required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Card Type</label> <span class="help">e.g. "Visa"</span>
                            <div class=" right">
                                <i class=""></i>
                                <div class="select2-container form-control select2" id="s2id_cardType"><a
                                        href="javascript:void(0)" onclick="return false;" class="select2-choice"
                                        tabindex="-1"> <span class="select2-chosen">
                                            Select Type
                                        </span><abbr class="select2-search-choice-close"></abbr> <span
                                            class="select2-arrow"><b></b></span></a><input
                                        class="select2-focusser select2-offscreen" type="text" id="s2id_autogen1">
                                    <div class="select2-drop select2-display-none select2-with-searchbox">
                                        <div class="select2-search"> <input type="text" autocomplete="off" autocorrect="off"
                                                autocapitalize="off" spellcheck="false" class="select2-input"> </div>
                                        <div class="scroll-wrapper select2-results" style="position: relative;">
                                            <ul class="select2-results scroll-content"
                                                style="margin-bottom: -17px; margin-right: -17px;"> </ul>
                                            <div class="scroll-element scroll-x">
                                                <div class="scroll-element_outer">
                                                    <div class="scroll-element_size"></div>
                                                    <div class="scroll-element_track"></div>
                                                    <div class="scroll-bar"></div>
                                                </div>
                                            </div>
                                            <div class="scroll-element scroll-y">
                                                <div class="scroll-element_outer">
                                                    <div class="scroll-element_size"></div>
                                                    <div class="scroll-element_track"></div>
                                                    <div class="scroll-bar"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><select class="form-control select2 select2-offscreen" id="cardType" name="cardType"
                                    data-init-plugin="select2" required="" tabindex="-1" aria-required="true">
                                    <option value="">
                                        Select Type
                                    </option>
                                    <option value="1">
                                        Visa
                                    </option>
                                    <option value="2">
                                        Master
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="pull-right">
                                <button class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i>
                                    Save</button>
                                <button class="btn btn-white btn-cons" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
