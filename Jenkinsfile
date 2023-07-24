pipeline{

agent any

    stages{
        stage('Fetch Code'){
            steps{
                git branch: 'main', 
                url:'https://github.com/skimasax/laravelproject.git'
            }
        }

        stage('download dependencies'){
            steps{
                sh 'composer install'
            }
        }

        stage('clear cache'){
            steps{
                sh 'php artisan config:clear'

                sh 'php artisan optimize'

                sh 'php artisan route:clear'
            }
        }

        stage('run test'){
            steps{
                sh 'php artisan test'
            }
        }


        
    }

}