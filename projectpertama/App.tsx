import {
  View,
  Text,
  Image,
  TextInput,
  ScrollView,
  StyleSheet,
} from 'react-native';
import React from 'react';

const App: React.FC = () => {
  return (
    <ScrollView style={styles.container}>
      <View style={styles.box}>
        <Text style={styles.text}>My Favorite Book</Text>
        <Image
          source={{
            uri: 'https://i.pinimg.com/564x/f9/1d/05/f91d053ac5d3597eac54cb12a4e07ef4.jpg',
          }}
          style={styles.image}
        />
        <TextInput placeholder="Type here..." style={styles.input} />

        <Image
          source={{
            uri: 'https://i.pinimg.com/564x/cd/83/00/cd8300a6708cdfef8eecb04943057d1d.jpg',
          }}
          style={styles.image}
        />
        <TextInput placeholder="Type here..." style={styles.input} />
        <Image
          source={{
            uri: 'https://i.pinimg.com/564x/f3/6d/7c/f36d7cf399b61d6081261163c920382b.jpg',
          }}
          style={styles.image}
        />
        <TextInput placeholder="Type here..." style={styles.input} />
        <Image
          source={{
            uri: 'https://i.pinimg.com/564x/e8/6f/99/e86f99f65555db6530c3594c2254a075.jpg',
          }}
          style={styles.image}
        />
        <TextInput placeholder="Type here..." style={styles.input} />
        <Image
          source={{
            uri: 'https://i.pinimg.com/564x/ee/6d/23/ee6d2360acbe6138a85f643cbe7f8fd7.jpg',
          }}
          style={styles.image}
        />
        <TextInput placeholder="Type here..." style={styles.input} />
      </View>
    </ScrollView>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    padding: 16,
  },
  box: {
    marginBottom: 20,
  },
  text: {
    fontSize: 20,
    fontWeight: 'bold',
    marginBottom: 10,
    // Gradasi warna teks
    color: '#006600', // Warna hijau
    textShadowColor: 'rgba(0, 0, 0, 0.75)',
    textShadowOffset: {width: -1, height: 1},
    textShadowRadius: 10,
  },
  image: {
    width: 200,
    height: 300,
    resizeMode: 'cover',
    marginBottom: 10,
  },
  input: {
    height: 40,
    borderColor: 'gray',
    borderWidth: 1,
    padding: 8,
  },
});

export default App;