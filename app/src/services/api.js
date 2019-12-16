/* eslint-disable */
import ax from "axios";

ax.defaults.baseURL = "http://localhost:8000";

export const axPo = async (endpt, fields) => {
  try {
    let { data } = await ax.post(endpt, fields);
    return data;
  } catch (err) {
    return err.response.data;
  }
};

export const axPu = async (endpt, fields) => {
  try {
    let { data } = await ax.put(endpt, fields);
    return data;
  } catch (err) {
    return err.response.data;
  }
};

export const axGe = async (endpt, params) => {
  try {
    let { data } = await ax.get(endpt, { params });
    return data;
  } catch (err) {
    return err.response.data;
  }
};

export const axDe = async (endpt, params) => {
  try {
    let { data } = await ax.put(endpt, { params });
    return data;
  } catch (err) {
    return err.response.data;
  }
};
