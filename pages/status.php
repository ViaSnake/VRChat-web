        <main>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">VRChat Web</h1>
                    <p class="lead">誠心誠意製作中と言いたいウェブサイトだった</p>
                </div>
            </div>
            <div class="container">
                <h1>VRChat ステータス</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>ゲームバージョン</td>
                            <td><?php echo $configobj->releaseAppVersionStandalone; ?></td>
                        </tr>
                        <tr>
                            <td>VRCSDKバージョン</td>
                            <td><?php echo '<a href="'.$configobj->releaseSdkUrl.'">'.$configobj->releaseSdkVersion.'</a>'; ?></td>
                        </tr>
                        <tr>
                            <td>Unityバージョン</td>
                            <td><?php echo $configobj->sdkUnityVersion; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
