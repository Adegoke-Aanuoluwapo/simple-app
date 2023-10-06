on: push
name: 🚀 Deploy website on push
jobs:
  web-deploy:
    name: 🎉 Deploy
    runs-on: ubuntu-latest
    steps:
    - name: 🚚 simple-app
      uses: actions/checkout@v2
    
    - name: 📂 Sync files
      uses: SamKirkland/FTP-Deploy-Action@4.1.0
      with:
        server: http://localhost/phpmyadmin/index.php?route=/
        username: Immaculate
        password: ${{ Immaculate }}
        server-dir:/public_html/simple-app
