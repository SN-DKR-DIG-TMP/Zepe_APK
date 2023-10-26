pipeline {
    agent any

    environment {
        DOCKER_IMAGE_NAME = '10.0.0.40:5002/zepe-apk'
        REGISTRY_URL = ${DOCKER_REGISTRY_URL}
    }

    stages {
        stage('Checkout') {
            steps {
                git(branch: 'main', credentialsId: 'gitlab',  url:'${GITLAB_URL}/zepe/zepe-apk')
            }
        }

        stage('Build Docker Image') {
            steps {
                script {
                    docker.build(DOCKER_IMAGE_NAME, ".")
                }
            }
        }

        stage('Push Docker Image') {
            steps {
                script {
                    docker.withRegistry(REGISTRY_URL, 'docker-registry') {
                        docker.image(DOCKER_IMAGE_NAME).push()
                    }
                }
            }
        }
    }
}
