@extends('installer::layouts.master')

@section('content')
    <div class="bg-yellow-50 min-h-screen">
        <div class="container mx-auto">
            <div class="flex space-x-8 py-20 relative">
                @include('installer::layouts.partials.sidebar')
                <?php
                $phpversion = phpversion();
                $mbstring = extension_loaded('mbstring');
                $bcmath = extension_loaded('bcmath');
                $ctype = extension_loaded('ctype');
                $json = extension_loaded('json');
                $openssl = extension_loaded('openssl');
                $pdo = extension_loaded('pdo');
                $tokenizer = extension_loaded('tokenizer');
                $xml = extension_loaded('xml');
                $fileinfo = extension_loaded('fileinfo');
                $fopen = ini_get('allow_url_fopen');

                $info = [
                    'phpversion' => $phpversion,
                    'mbstring' => $mbstring,
                    'bcmath' => $bcmath,
                    'ctype' => $ctype,
                    'json' => $json,
                    'openssl' => $openssl,
                    'pdo' => $pdo,
                    'tokenizer' => $tokenizer,
                    'xml' => $xml,
                    'fileinfo' => $fileinfo,
                    'allow_url_fopen' => $fopen,
                ];
                ?>
                <div class=" bg-white h-auto rounded-lg w-full px-12 py-12">
                    <h2 class="text-center text-4xl font-medium">Permissions</h2>
                    <div class="relative overflow-x-auto mt-8">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-12 py-5 text-lg font-medium">
                                        Extentions
                                    </th>
                                    <th scope="col" class="px-12 py-5 text-lg text-center font-medium">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b border-slate-100">
                                    <td class=" px-12 py-5 text-base">
                                        PHP >= {{ config('installer.php_version') }}
                                    </td>
                                    <td class="px-12 py-5 text-center">
                                        <?php
                                        if ($info['phpversion'] >= config('installer.php_version')) { ?>
                                            <svg class="fill-green-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                                            <?php
                                        }else{ ?>
                                            <svg class="fill-red-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9.414l2.828-2.829 1.415 1.415L13.414 12l2.829 2.828-1.415 1.415L12 13.414l-2.828 2.829-1.415-1.415L10.586 12 7.757 9.172l1.415-1.415L12 10.586z"/></svg>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-slate-100">
                                    <td class=" px-12 py-5 text-base">
                                        BCMath PHP Extension
                                    </td>
                                    <td class="px-12 py-5 text-center">
                                        <?php
                                        if ($info['bcmath'] == 1) { ?>
                                            <svg class="fill-green-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                                            <?php
                                        }else{ ?>
                                            <svg class="fill-red-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9.414l2.828-2.829 1.415 1.415L13.414 12l2.829 2.828-1.415 1.415L12 13.414l-2.828 2.829-1.415-1.415L10.586 12 7.757 9.172l1.415-1.415L12 10.586z"/></svg>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-slate-100">
                                    <td class=" px-12 py-5 text-base">
                                        Ctype PHP Extension
                                    </td>
                                    <td class="px-12 py-5 text-center">
                                        <?php
                                        if ($info['ctype'] == 1) { ?>
                                            <svg class="fill-green-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                                            <?php
                                        }else{ ?>
                                            <svg class="fill-red-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9.414l2.828-2.829 1.415 1.415L13.414 12l2.829 2.828-1.415 1.415L12 13.414l-2.828 2.829-1.415-1.415L10.586 12 7.757 9.172l1.415-1.415L12 10.586z"/></svg>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-slate-100">
                                    <td class=" px-12 py-5 text-base">
                                        JSON PHP Extension
                                    </td>
                                    <td class="px-12 py-5 text-center">
                                        <?php
                                        if ($info['json'] == 1) { ?>
                                            <svg class="fill-green-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                                            <?php
                                        }else{ ?>
                                            <svg class="fill-red-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9.414l2.828-2.829 1.415 1.415L13.414 12l2.829 2.828-1.415 1.415L12 13.414l-2.828 2.829-1.415-1.415L10.586 12 7.757 9.172l1.415-1.415L12 10.586z"/></svg>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-slate-100">
                                    <td class=" px-12 py-5 text-base">
                                        Mbstring PHP Extension
                                    </td>
                                    <td class="px-12 py-5 text-center">
                                        <?php
                                        if ($info['mbstring'] == 1) { ?>
                                            <svg class="fill-green-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                                            <?php
                                        }else{ ?>
                                            <svg class="fill-red-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9.414l2.828-2.829 1.415 1.415L13.414 12l2.829 2.828-1.415 1.415L12 13.414l-2.828 2.829-1.415-1.415L10.586 12 7.757 9.172l1.415-1.415L12 10.586z"/></svg>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-slate-100">
                                    <td class=" px-12 py-5 text-base">
                                        OpenSSL PHP Extension
                                    </td>
                                    <td class="px-12 py-5 text-center">
                                        <?php
                                        if ($info['openssl'] == 1) { ?>
                                            <svg class="fill-green-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                                            <?php
                                        }else{ ?>
                                            <svg class="fill-red-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9.414l2.828-2.829 1.415 1.415L13.414 12l2.829 2.828-1.415 1.415L12 13.414l-2.828 2.829-1.415-1.415L10.586 12 7.757 9.172l1.415-1.415L12 10.586z"/></svg>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-slate-100">
                                    <td class=" px-12 py-5 text-base">
                                        PDO PHP Extension
                                    </td>
                                    <td class="px-12 py-5 text-center">
                                        <?php
                                        if ($info['pdo'] == 1) { ?>
                                            <svg class="fill-green-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                                            <?php
                                        }else{ ?>
                                            <svg class="fill-red-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9.414l2.828-2.829 1.415 1.415L13.414 12l2.829 2.828-1.415 1.415L12 13.414l-2.828 2.829-1.415-1.415L10.586 12 7.757 9.172l1.415-1.415L12 10.586z"/></svg>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-slate-100">
                                    <td class=" px-12 py-5 text-base">
                                        Tokenizer PHP Extension
                                    </td>
                                    <td class="px-12 py-5 text-center">
                                        <?php
                                        if ($info['tokenizer'] == 1) { ?>
                                            <svg class="fill-green-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                                            <?php
                                        }else{ ?>
                                            <svg class="fill-red-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9.414l2.828-2.829 1.415 1.415L13.414 12l2.829 2.828-1.415 1.415L12 13.414l-2.828 2.829-1.415-1.415L10.586 12 7.757 9.172l1.415-1.415L12 10.586z"/></svg>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-slate-100">
                                    <td class=" px-12 py-5 text-base">
                                        XML PHP Extension
                                    </td>
                                    <td class="px-12 py-5 text-center">
                                        <?php
                                        if ($info['xml'] == 1) { ?>
                                            <svg class="fill-green-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                                            <?php
                                        }else{ ?>
                                            <svg class="fill-red-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9.414l2.828-2.829 1.415 1.415L13.414 12l2.829 2.828-1.415 1.415L12 13.414l-2.828 2.829-1.415-1.415L10.586 12 7.757 9.172l1.415-1.415L12 10.586z"/></svg>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-slate-100">
                                    <td class=" px-12 py-5 text-base">
                                        Fileinfo PHP Extension
                                    </td>
                                    <td class="px-12 py-5 text-center">
                                        <?php
                                        if ($info['fileinfo'] == 1) { ?>
                                            <svg class="fill-green-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                                            <?php
                                        }else{ ?>
                                            <svg class="fill-red-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9.414l2.828-2.829 1.415 1.415L13.414 12l2.829 2.828-1.415 1.415L12 13.414l-2.828 2.829-1.415-1.415L10.586 12 7.757 9.172l1.415-1.415L12 10.586z"/></svg>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-slate-100">
                                    <td class=" px-12 py-5 text-base">
                                        Fopen PHP Extension
                                    </td>
                                    <td class="px-12 py-5 text-center">
                                        <?php
                                        if ($info['allow_url_fopen'] == 1) { ?>
                                            <svg class="fill-green-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/></svg>
                                            <?php
                                        }else{ ?>
                                            <svg class="fill-red-500 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9.414l2.828-2.829 1.415 1.415L13.414 12l2.829 2.828-1.415 1.415L12 13.414l-2.828 2.829-1.415-1.415L10.586 12 7.757 9.172l1.415-1.415L12 10.586z"/></svg>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <?php
                        $page_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        if ($info['phpversion'] >= 7.2 && $info['mbstring'] == 1 && $info['bcmath'] == 1 && $info['ctype'] == 1 && $info['json'] == 1 && $info['openssl'] == 1 && $info['pdo'] == 1 && $info['tokenizer'] == 1 && $info['xml'] == 1) { ?>
                                <a href="{{ $page_url.'/configuration' }}" class="mt-8 bg-indigo-500 px-10 mr-5 text-white rounded-md float-right py-3 flex items-center text-lg"><span>Next</span> <svg class=" fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/></svg></a>
                            <?php
                        }else{ ?>
                            <a class="mt-8 bg-indigo-100 px-10 mr-5 text-gray-400 rounded-md float-right py-3 flex items-center text-lg cursor-not-allowed"><span>Next</span> <svg class=" fill-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/></svg></a>
                        <?php
                        }
                        ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
