<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 62.5%;
            /* font-family: Anek Bangla; */
            font-family: 'my_custom_name', Arial, sans-serif !important;
        }


        table,
        tHead,
        th {
            font-size: 1rem;
            font-weight: 600;
            color: #445164;
            text-align: left;
            padding: .4rem .8rem;
            text-transform: uppercase;
        }

        table,
        tbody,
        td {
            font-size: .9rem;
            font-weight: 400;
            color: #090909;
            text-align: left;
            padding: .4rem .8rem;
            text-transform: none;
        }

        table,
        th,
        td {
            border: 1px solid #D1D1D1;
            border-spacing: 0;
        }

        .grid_container>table td {
            padding: .4rem .8rem;
            color: #445164;
            font-size: 1rem;
            text-transform: uppercase;
            width: 50%;
        }

        .grid_container>table td p {
            margin-top: .4rem
        }
    </style>
</head>


<body>
    <main
        style="width: 59.5rem; min-height: 84.2rem; padding: 3.2rem 0rem; margin: 0 auto;  position: relative; background-color: #ffffff;">

        <section style="width: 100%;">
            <article style="width: 33%; float: left;">
                <p style="color: #090909; font-size: 1.2rem;">আদিব ডিস্ট্রিবিউশন হাউজ</p>
                <p style="margin: .4rem 0; color: #445164; font-size: 1rem;">01512404141</p>
                <p style="color: #445164; font-size: 1rem;">Farmgate, Dhaka</p>
            </article>

            <article style="width: 33%; float: left; text-align: center;">
                <p style="font-size: 1.4rem; color: #445164;">Receipt</p>
            </article>

            <p style="width: 33%; float: left; font-size: .8rem; color: #272727; text-align: right;">
                Report generate<br />12 August 2023, 12:30 pm
            </p>
            <div style="clear: both;"></div>
        </section>

        <section class="grid_container" style="margin-top: 2rem;">
            <table style="width: 100%; padding:0; border:none;">
                <tbody>
                    <tr>
                        <td>
                            <b>Transaction date</b>
                            <p>02-August-2023, 12:30 pm</p>
                        </td>
                        <td>
                            <b>Challan no</b>
                            <p>1121212</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>customer</b>
                            <p>Asharafull</p>
                        </td>
                        <td>
                            <b>MOBILE</b>
                            <p>01134649840</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section style="margin-top: 1.6rem;">
            <p style="font-size: 1.2rem; color: #445164; margin-bottom: .4rem;">Product list: (03)</p>

            <table style="width: 100%; padding: 0; border:none;">
                <tHead>
                    <tr>
                        <th style="width: 12rem;">product name</th>
                        <th style="width:4rem;">QTY</th>
                        <th style="width:6.5rem;">rate</th>
                        <th style="width:4rem;">return</th>
                        <th style="width:6.5rem;">Sell</th>
                        <th style="width:4rem;">free</th>
                        <th style="width:8rem;">total taka</th>
                    </tr>
                </tHead>

                <tbody>
                    <tr>
                        <td style="width: 12rem;">
                            <p>কোকাকোলা ৬০০ মিলি</p>
                        </td>
                        <td style="width:4rem;">50</td>
                        <td style="width:6.5rem;">৳ 400</td>
                        <td style="width:4rem;">4</td>
                        <td style="width:6.5rem;">46</td>
                        <td style="width:4rem;">10</td>
                        <td style="width:8rem;">৳ 6,000</td>
                    </tr>
                    <tr>
                        <td style="width: 12rem;">
                            <p>কোকাকোলা ৬০০ মিলি</p>
                            name will be place thius area
                        </td>
                        <td style="width:4rem;">50</td>
                        <td style="width:6.5rem;">৳ 400</td>
                        <td style="width:4rem;">--</td>
                        <td style="width:6.5rem;">46</td>
                        <td style="width:4rem;">--</td>
                        <td style="width:8rem;">৳ 6,000</td>
                    </tr>
                </tbody>
            </table>

            <article
                style="float:right; text-align: left; font-size: 1rem; color:#445164; margin-top: 2rem; text-transform: uppercase">
                <p>
                    <b style="display: inline-block;">total Amount</b>
                    <span style="display: inline-block; min-width: 5rem;">৳ 18,000</span>
                </p>

                <p style="padding: 1rem 0; border-bottom: 1px dashed #D1D1D1; margin-bottom: 1rem;">
                    <b style="display: inline-block;">payment Amount</b>
                    <span style="display: inline-block; min-width: 5rem; ">৳ 15,000</span>
                </p>
                <p>
                    <b style="display: inline-block;">Due</b>
                    <span style="display: inline-block; min-width: 5rem;">৳ 18,000</span>
                </p>

            </article>
            <div style="clear: both;"></div>
        </section>

        <section style="position: absolute; width: 100%; left: 0; bottom: 4rem; padding: 0 3.2rem; height: 5rem;">
            <div style="float: left; width: 33%;">
                {{-- <svg width="60" height="48" viewBox="0 0 60 48" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.2">
                        <path
                            d="M31.9835 36.5306C32.0329 38.2852 31.172 39.9444 29.7105 40.9127C28.2491 41.8811 26.3905 42.0237 24.7989 41.2883C23.2116 40.5554 22.118 39.0466 21.9126 37.3052L11.4179 31.246C9.80704 31.9389 7.95358 31.7462 6.52522 30.738C5.09687 29.7298 4.2911 28.0489 4.39897 26.2991C4.50684 24.5492 5.5158 22.9698 7.0532 22.1371C8.59736 21.3025 10.4611 21.3291 11.9775 22.2046L20.7245 27.2547L18.3963 28.2502L21.0221 29.7662L20.7202 27.2522L29.4672 32.3023C30.9793 33.1753 31.9342 34.7761 31.9835 36.5306ZM21.615 34.7936L21.3173 32.2821L16.0699 29.2525L13.7461 30.2505L21.615 34.7936Z"
                            fill="#626262" />
                        <path
                            d="M11.2754 33.5093L20.0224 38.5594C19.3495 39.725 18.2413 40.5761 16.9488 40.9252C15.6496 41.2762 14.2745 41.0958 13.1136 40.4256C11.9528 39.7554 11.109 38.6547 10.7634 37.3541C10.422 36.0559 10.6025 34.6749 11.2754 33.5093Z"
                            fill="#626262" />
                        <path
                            d="M29.1535 19.7864C29.4992 21.087 29.3144 22.4655 28.6414 23.6311C27.9685 24.7966 26.867 25.646 25.5678 25.9969C24.2686 26.3478 22.8935 26.1675 21.7327 25.4973C20.5718 24.8271 19.7281 23.7263 19.3824 22.4257C19.0367 21.1251 19.219 19.7508 19.8919 18.5853C20.5673 17.4154 21.6663 16.5704 22.9655 16.2195C24.2672 15.8643 25.6424 16.0446 26.8032 16.7148C27.9641 17.385 28.8078 18.4858 29.1535 19.7864Z"
                            fill="#626262" />
                    </g>
                    <g opacity="0.2">
                        <path
                            d="M55.1802 37.8508C55.2013 38.5994 54.834 39.3073 54.2104 39.7204C53.5869 40.1335 52.7939 40.1944 52.1149 39.8807C51.4377 39.568 50.9711 38.9242 50.8835 38.1812L46.4059 35.5961C45.7186 35.8917 44.9278 35.8095 44.3184 35.3794C43.709 34.9492 43.3652 34.232 43.4112 33.4855C43.4573 32.7389 43.8877 32.0651 44.5437 31.7098C45.2025 31.3537 45.9976 31.365 46.6446 31.7386L50.3765 33.8932L49.3832 34.3179L50.5035 34.9647L50.3747 33.8921L54.1066 36.0468C54.7518 36.4192 55.1592 37.1022 55.1802 37.8508ZM50.7565 37.1097L50.6295 36.0381L48.3907 34.7456L47.3992 35.1714L50.7565 37.1097Z"
                            fill="#626262" />
                        <path
                            d="M46.3438 36.5618L50.0757 38.7164C49.7886 39.2137 49.3157 39.5768 48.7643 39.7258C48.21 39.8755 47.6233 39.7986 47.128 39.5126C46.6328 39.2267 46.2728 38.757 46.1253 38.2021C45.9796 37.6483 46.0566 37.059 46.3438 36.5618Z"
                            fill="#626262" />
                        <path
                            d="M53.9722 30.7068C54.1197 31.2617 54.0409 31.8499 53.7538 32.3472C53.4667 32.8445 52.9967 33.2068 52.4424 33.3565C51.8881 33.5063 51.3014 33.4293 50.8061 33.1434C50.3108 32.8574 49.9509 32.3878 49.8034 31.8329C49.6559 31.278 49.7337 30.6917 50.0208 30.1944C50.3089 29.6953 50.7778 29.3347 51.3321 29.185C51.8875 29.0335 52.4742 29.1104 52.9695 29.3963C53.4648 29.6823 53.8247 30.1519 53.9722 30.7068Z"
                            fill="#626262" />
                    </g>
                    <g opacity="0.2">
                        <path
                            d="M54.7937 16.6105C54.8228 17.6442 54.3156 18.6217 53.4546 19.1922C52.5936 19.7627 51.4986 19.8467 50.561 19.4135C49.6258 18.9817 48.9815 18.0928 48.8605 17.0668L42.6777 13.4972C41.7287 13.9054 40.6367 13.7918 39.7952 13.1979C38.9537 12.6039 38.479 11.6136 38.5426 10.5827C38.6061 9.55182 39.2005 8.62133 40.1063 8.13073C41.016 7.63905 42.114 7.65471 43.0073 8.17049L48.1606 11.1457L46.7889 11.7322L48.3359 12.6254L48.158 11.1443L53.3113 14.1195C54.2021 14.6338 54.7646 15.5768 54.7937 16.6105ZM48.6852 15.5872L48.5098 14.1075L45.4184 12.3227L44.0493 12.9107L48.6852 15.5872Z"
                            fill="#626262" />
                        <path
                            d="M42.5938 14.8306L47.747 17.8058C47.3505 18.4924 46.6976 18.9939 45.9362 19.1996C45.1708 19.4063 44.3606 19.3001 43.6767 18.9052C42.9928 18.5104 42.4957 17.8619 42.2921 17.0956C42.091 16.3309 42.1973 15.5172 42.5938 14.8306Z"
                            fill="#626262" />
                        <path
                            d="M53.1273 6.74585C53.3309 7.51209 53.2221 8.32426 52.8256 9.01092C52.4292 9.69759 51.7802 10.198 51.0148 10.4047C50.2494 10.6115 49.4393 10.5052 48.7554 10.1104C48.0715 9.71551 47.5744 9.06703 47.3707 8.30078C47.1671 7.53454 47.2745 6.72491 47.6709 6.03825C48.0688 5.34904 48.7163 4.85121 49.4817 4.64446C50.2486 4.43518 51.0587 4.54143 51.7426 4.93628C52.4265 5.33113 52.9236 5.97961 53.1273 6.74585Z"
                            fill="#626262" />
                    </g>
                </svg> --}}
            </div>

            <div style="float: left; width: 33%; padding-top: 3rem; font-size: 1.4rem; color: #090909">
                <div style="float: left;">
                    {{-- <img src="{{ asset('/public/image/brand_logo.png') }}" alt=""> --}}
                    {{-- <svg width="19" height="16" viewBox="0 0 19 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.1417 8.5151C18.6791 9.38867 18.7282 10.4799 18.2717 11.397C17.8153 12.3141 16.9167 12.9294 15.8969 13.0223C14.8799 13.1151 13.886 12.6711 13.2735 11.8498L6.19503 11.8498C5.58253 12.6711 4.58866 13.1151 3.57167 13.0223C2.55468 12.9294 1.65615 12.3141 1.19967 11.397C0.743177 10.4799 0.792293 9.38576 1.32679 8.51509C1.86417 7.64152 2.81471 7.11041 3.83747 7.11041L9.73715 7.11041L8.85018 8.29452L10.6212 8.29452L9.73426 7.11041L15.6339 7.11042C16.6538 7.11042 17.6043 7.64152 18.1417 8.5151ZM12.3894 10.6656L11.5053 9.48154L7.96609 9.48154L7.08201 10.6656L12.3894 10.6656Z"
                            fill="#69D5FF" />
                        <path
                            d="M6.78516 13.0367L12.6848 13.0367C12.6848 13.8232 12.3728 14.5778 11.821 15.1322C11.2663 15.6894 10.518 15.9999 9.73499 15.9999C8.95203 15.9999 8.20374 15.6894 7.64902 15.1322C7.09719 14.5749 6.78516 13.8232 6.78516 13.0367Z"
                            fill="#69D5FF" />
                        <path
                            d="M11.821 0.867707C12.3757 1.42494 12.6848 2.17661 12.6848 2.96312C12.6848 3.74962 12.3757 4.5013 11.821 5.05853C11.2663 5.61576 10.518 5.92629 9.73499 5.92629C8.95203 5.92629 8.20374 5.61576 7.64902 5.05853C7.0943 4.5013 6.78516 3.75252 6.78516 2.96602C6.78516 2.17661 7.0943 1.42784 7.64902 0.870608C8.20374 0.310478 8.95203 -6.06563e-05 9.73499 -6.05194e-05C10.518 -6.03825e-05 11.2663 0.310478 11.821 0.867707Z"
                            fill="#69D5FF" />
                    </svg> --}}
                </div>
                <span style="display: inline-block; padding: .1rem 0 0 .2rem;">Generated by Paikari</span>
            </div>

            <p
                style="float: right; width: 33%; padding-top: 3.6rem; text-align: right; font-size: .6rem; color: #000000">
                Page 1 / 1</p>
        </section>
        <div style="height: 5rem;"></div>
    </main>
</body>

</html>
