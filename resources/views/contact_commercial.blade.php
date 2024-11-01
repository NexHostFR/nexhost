@extends('base')

@section('title', "Contact Commercial")

@section('body')
<main>
    <div class="my-5 mx-auto text-center">
        <h1 class="display-5 fw-bold text-body-emphasis text-center">Contactez notre équipe commerciale</h1>
        <p>Développer vos activités avec un partenaire éthique et souverrain engagé pour la protection des données.</p>    
    </div>
    <!-- Liste d'information pour organisation -->
    <div class="container">
        <div class="d-flex flex-column flex-md-row">
            <div class="col m-4">
                <div class="m-2 p-2 rounded rounded-3 border">
                    <h5>Entreprise et administrations publiques</h5>
                    <p>Notre équipe commerciale est la pour  vous accompagne dans :</p>
                    <ul>
                        <li>la sélection de vos produits</li>
                        <li>votre transition numérique</li>
                        <li>la réalisation du devis</li>
                    </ul>
                </div>
                <div class="m-2 p-2 rounded rounded-3 border">
                    <h5>Start-Ups, non-profits et éducation</h5>
                    <p>NexHost soutient les associations à but non lucratif et les start-ups qui contribue à la protection des données et la souvraineté numérique.</p>
                </div>
                <div class="m-2 p-2 rounded rounded-3 border">
                    <h5>Une offre personnaliser</h5>
                    <p>NexHost vous crée une offre sur mesure en fonction de vos besoins.   </p>
                </div>
            </div>
            <div class="col m-4">
                <h3>Parlez-nous de votre projet</h3>
                <p>Pour vous aider au mieux, merci de nous fournir quelques informations sur vous :</p>
                <form action="" method="post" class="">
                    <div class="d-flex flex-column flex-md-row">
                        <div class="col mb-3 m-2">
                            <select name="entite" id="entite" class="form-control" required="required">
                                <option value="organisation_non_lucratif">Organisation à but non lucratif</option>
                                <option value="stat_up">Stat-up</option>
                                <option value="pme">PME</option>
                                <option value="independant">Indépendant</option>
                                <option value="grand_entreprise">Grand entreprise</option>
                            </select>
                        </div>
    
                        <div class="col mb-3 m-2">
                            <select name="nombre_employes" id="" class="form-control" required="required">
                                <option value="1">1</option>
                                <option value="2-9">2-9</option>
                                <option value="10-19">10-19</option>
                                <option value="20-49">20-49</option>
                                <option value="50-99">50-99</option>
                                <option value="100-199">100-199</option>
                                <option value="200+">200+</option>
                            </select>
                        </div>
                    </div>
    
                    <div class="d-flex flex-column flex-md-row">
                        <div class="col mb-3 m-2">
                            <input type="text" name="nom" id="" class="form-control" placeholder="Votre nom" required="required">
                        </div>
    
                        <div class="col mb-3 m-2">
                            <input type="text" name="prenom" id="" class="form-control" placeholder="Votre prénom" required="required">
                        </div>
                    </div>
    
                    <div class="d-flex flex-column flex-md-row">
                        <div class="col mb-3 m-2">
                            <input type="text" name="email" id="" class="form-control" placeholder="Votre adresse email" required="required">
                        </div>
    
                        <div class="col mb-3 m-2">
                            <input type="text" name="telephone" id="" class="form-control" placeholder="Votre numéro de téléphone" required="required">
                        </div>
                    </div>
    
                    <div class="d-flex flex-column flex-md-row">
                        <div class="col mb-3 m-2">
                            <input type="text" name="fonction" id="" class="form-control" placeholder="Votre fonction" required="required">
                        </div>
    
                        <div class="col mb-3 m-2">
                            <input type="text" name="nom_organisation" id="" class="form-control" placeholder="Nom de votre Organisation" required="required">
                        </div>
                    </div>
    
                    <div class="d-flex flex-column flex-md-row">
                        <div class="col mb-3 m-2">
                            <select name="country" id="" class="form-control">
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Åland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua &amp; Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">Bosnia &amp; Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="VG">British Virgin Islands</option>
                                <option value="BN">Brunei</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="BQ">Caribbean Netherlands</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo - Brazzaville</option><option value="CD">Congo - Kinshasa</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Côte d’Ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="CY">Cyprus</option><option value="CZ">Czechia</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="SZ">Eswatini</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard &amp; McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong SAR China</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao SAR China</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar (Burma)</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MK">North Macedonia</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestinian Territories</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn Islands</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Réunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">São Tomé &amp; Príncipe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia &amp; South Sandwich Islands</option><option value="KR">South Korea</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="BL">St. Barthélemy</option><option value="SH">St. Helena</option><option value="KN">St. Kitts &amp; Nevis</option><option value="LC">St. Lucia</option><option value="MF">St. Martin</option><option value="PM">St. Pierre &amp; Miquelon</option><option value="VC">St. Vincent &amp; Grenadines</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard &amp; Jan Mayen</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad &amp; Tobago</option><option value="TN">Tunisia</option><option value="TR">Türkiye</option><option value="TM">Turkmenistan</option><option value="TC">Turks &amp; Caicos Islands</option><option value="TV">Tuvalu</option><option value="UM">U.S. Outlying Islands</option><option value="VI">U.S. Virgin Islands</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican City</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis &amp; Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>
                            </select>
                        </div>
    
                        <div class="col mb-3 m-2">
                            <input type="text" name="city" id="" class="form-control" placeholder="Ville" required="required">
                        </div>
                    </div>
    
    
                    <div class="d-flex flex-column flex-md-row">
                        <div class="col mb-3 m-2">
                            <select name="category_product" id="" class="form-control" required="required">
                                <option value="web">Hébergement Web</option>
                                <option value="null">Autre</option>
                            </select>
                        </div>
    
                        <div class="col mb-3 m-2">
                            <select name="langue" id="" class="form-control" required="required">
                                <option value="fr">Français</option>
                                <option value="en">Anglais</option>
                            </select>
                        </div>
                    </div>
    
                    <div class="d-flex flex-column flex-md-row">
                        <div class="col mb-3 m-2">
                            <select name="source_info" id="" class="form-control" required="required">
                                <option value="">Sélectionner d'ou es que vous nous connaissez</option>
                                <option value="internet">Internet</option>
                                <option value="publicite">Publicité</option>
                                <option value="recommandation">Recommandation</option>
                            </select>
                        </div>
                    </div>
    
                    <div class="col mb-3 m-2">
                        <textarea class="form-control" name="demande_projet" placeholder="Parlez-nous de votre projet / demande"></textarea>
                    </div>
                    
                    @csrf

                    <button class="btn btn-outline-secondary text-body-emphasis m-2" type="submit">Envoyer ma demande</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Information sur le chef developpemetn business -->
    <div>
    
    </div>
    <!-- Caroussel avec des expérience de client -->
    <div>

    </div>
    <!-- Pourquoi choisir NexHost -->
    @include('components/information_general')
</main>
@endsection
